<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TicketController extends Controller
{
    // Menampilkan halaman depan ticketing
    public function ticket() {
        return view('TIK.index');
    }

    // menyimpan akun registrasi / melakukan registrasi
    public function register(Request $request) { 
        $request->validate([ 
            'name' => 'required|string|max:255', 
            'email' => 'required|string|email|max:255|lowercase|unique:users', 
            'phone' => 'required|numeric',
            'password' => 'required|string|min:8|confirmed', 
        ]); 
        
        User::create([ 
            'name' => $request->name,
            'email' => $request->email, 
            'phone' => $request->phone,
            'password' => Hash::make($request->password), 
        ]); 
        
        return redirect()->route('Admin.sign')->with('success', 'Registrasi berhasil. Silakan signin.'); 
    }

    // Mengakses Akun Signin / melakukan sign in
    public function signin(Request $request) { 
        $credentials = $request->validate([ 
            'email' => 'required|email', 
            'password' => 'required', 
        ]);
         if (Auth::attempt($credentials)) 
         { $request->session()->regenerate(); 
            return redirect()->intended('dashboard');
         } 
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.', ])->onlyInput('email');
         }

   
         
        // menampilkan laman dashboard admin
        public function dashboard() { 
        $allTicket = Ticket::all();
         return view('Admin.list', compact('allTicket'));
         }

        //  menampilkan halaman profile admin
        public function showProfile() {
             return view('Admin.profile', [
                'user' => Auth::user()
            ]); 
        } 

        // melakukan update profile
        public function updateProfile(Request $request) {
             $user = Auth::user();
             $request->validate([
                 'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,'.
                $user->id, 
            ]); 

            $user->update([ 
                'name' => $request->name, 
                'email' => $request->email, 
            ]); 
            return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui.'); 
        } 
        
        // melakukan update password
        public function updatePassword(Request $request) {
             $user = Auth::user(); 
             $request->validate([ 
                'current_password' => 'required', 
                'password' => 'required|string|min:8|confirmed', 
            ]); 
            if (!Hash::check($request->current_password, $user->password)) 
            { 
                return back()->withErrors(['current_password' => 'Current password tidak cocok.']); 
            } 
            $user->update([ 'password' => Hash::make($request->password), ]); 
            return redirect()->route('profile')->with('success', 'Password berhasil diperbarui.'); 
        } 
        
        // menghapus atau mendelete user
        public function destroyUser($id) { 
            $user = User::findOrFail($id); 
            $user->delete(); 
            return redirect()->route('dashboard')->with('success', 'User telah dihapus.');
        }

        // melakukan signout atau keluar 
        public function signout(Request $request) {
             Auth::logout(); 
             $request->session()->invalidate(); 
             $request->session()->regenerateToken(); 
             return redirect('/index')->with('success', 'Anda Telah keluar.'); 
            } 
            

    // Menampilkan daftar ticket
    // public function show()
    // {
    //     $ticket = Ticket::all();
    //      dd($allTicket);
    //     return view('Admin.list', compact('ticket'));
    // }

    // Menampilkan form Open Ticket
    public function create()
    {
        return view('TIK.open');
    }


    // Menyimpan tiket baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'phone' => 'required|string',
            'topic' => 'required|string',
        ]);

        $ticket = Ticket::create($request->all());

        // return redirect()->back();
        return redirect()->back()->with('success', 'Tiket berhasil dibuat dengan nomor: ' . $ticket->id);
    }


    // melakukan edit
    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
    
        $topics = [
            'email_unsri' => 'Email Unsri / Pembuatan',
            'reset_unsri' => 'Email Unsri / Reset Password',
            'vpn_unsri' => 'VPN Unsri',
            'internet_unsri' => 'Akses Internet / Pengaduan Masalah'
        ];
    
        $statuses = [
            'belum diproses' => 'Belum Diproses',
            'sedang diproses' => 'Sedang Diproses',
            'selesai' => 'Selesai'
        ];
    
        return view('Admin.edit', compact('ticket', 'topics', 'statuses'));
    }
    
    // melaukan update data dari edit
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'phone' => 'required|string',
            'topic' => 'required|string',
            'status' => 'required|string'
        ]);
    
        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());
    
        // return redirect()->back()->with('success', 'Tiket berhasil diperbarui.');
    
        return redirect()->route('dashboard', $id)->with('success', 'Tiket berhasil diperbarui.');
    }
    

    // melakukan delete tiket
    function delete($id)  {
        $allTicket = Ticket::find($id);
        if ($allTicket) { 
            $allTicket->delete(); 
            return redirect()->route('dashboard')->with('success', 'Data Berhasil Dihapus'); } 
        else { 
            return redirect()->back()->withErrors('Data tidak ditemukan.'); }

    }



    // Menampilkan form cek tiket
    public function check()
    {
        return view('TIK.check');
    }

    // Proses pencarian cek tiket
    // public function find(Request $request)
    // {
    //     $ticket = Ticket::where('email', $request->email)
    //                     ->where('id', $request->ticket_id)
    //                     ->first();

    //     if (!$ticket) {
    //         return back()->withErrors('Ticket not found');
    //     }

    //     // return redirect()->route('ticket.show', $ticket);
    //     return redirect()->route('TIK.show', ['ticket' => $ticket]);
    // }
    
    public function find(Request $request){
    $ticket = Ticket::where('email', $request->email)
                    ->where('id', $request->ticket_id)
                    ->first();

    if (!$ticket) {
        return response()->json(['success' => false, 'message' => 'Tiket tidak ditemukan'], 404);
    }

    return response()->json(['success' => true, 'ticket' => $ticket], 200);
}



  
}


