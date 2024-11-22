<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;



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
        public function dashboard()
        {
            $userId = User::currentUserId();
            $allTicket = Ticket::all();
            $totalTickets = Ticket::count();
            $processedTickets = Ticket::whereIn('status', ['sedang diproses', 'selesai'])->count();
        
            // Hitung jumlah tiket yang diproses oleh setiap pengguna
            // $usersProcessingTickets = User::withCount(['tickets' => function ($query) {
            //     $query->whereIn('status', ['sedang diproses', 'selesai']);
            // }])->get();

            $userProcessingTickets = User::withCount(['tickets' => function ($query) 
            use ($userId) { 
                $query->where('user_id', $userId)->whereIn('status', ['sedang diproses', 'selesai']);
             }])->find($userId);
        
            // $usersProcessingTickets = User::whereHas('tickets', function ($query) {
            //     $query->whereIn('status', ['sedang diproses', 'selesai']);
            // })->withCount(['tickets' => function ($query) {
            //     $query->whereIn('status', ['sedang diproses', 'selesai']);
            // }])->get();

            // foreach ($usersProcessingTickets as $user) {
            //     Log::info('User: '.$user->name.' - Tickets Count: '.$user->tickets_count);
            // }
        
            return view('Admin.list', compact('allTicket', 'totalTickets', 'processedTickets', 'userProcessingTickets'));
        }
        
        
        //  menampilkan halaman profile admin
        public function showProfile($id) { 
            $user = User::findOrFail($id);
            return view('Admin.profile', ['user' => $user]); 
        } 
        

        // melakukan update profile
        public function updateProfile(Request $request, $id) { 
            $user = User::findOrFail($id); 
            $request->validate([ 
                'name' => 'required|string|max:255', 
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            ]); 
            $user->update([ 
                'name' => $request->name, 
                'email' => $request->email,
            ]); 
            return redirect()->route('profile', ['id' => $user->id])->with('success', 'Profile berhasil diperbarui.'); 
        } 
        
        
        // melakukan update password
        public function updatePassword(Request $request, $id) { 
            $user = User::findOrFail($id); 
            $request->validate([ 
                'current_password' => 'required', 
                'password' => 'required|string|min:8|confirmed', ]); 
                if (!Hash::check($request->current_password, $user->password)) { 
                    return back()->withErrors(['current_password' => 'Current password tidak cocok.']); 
                }
                $user->update([ 'password' => Hash::make($request->password), ]);
                return redirect()->route('profile', ['id' => $user->id])->with('success', 'Password berhasil diperbarui.'); 
            } 
            

        // menghapus atau mendelete user    
        public function destroyUser($id) { 
            $user = User::findOrFail($id);
             $user->delete(); return redirect()->route('dashboard')->with('success', 'User berhasil dihapus.'); 
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


        // melakukan edit ticket
        public function edit($id)
        {
        $ticket = Ticket::findOrFail($id);
        $currentUserId = User::currentUserId();
    
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
    
        return view('Admin.edit', compact('ticket', 'topics', 'statuses','currentUserId'));
        }
    

        // melakukan update data dari edit
        public function update(Request $request, $id)
        {
            $request->validate([
                'email' => 'required|email',
                'name' => 'required|string',
                'phone' => 'required|string',
                'topic' => 'required|string',
                'status' => 'required|string',
                'user_id' => 'required|integer'
            ]);

            $ticket = Ticket::findOrFail($id);

            // Log data yang diterima dari request
            Log::info('Request data: ', $request->all());

            // Update data ticket
            $ticket->update($request->all());

            // Menyimpan user_id dari request
            $ticket->user_id = $request->input('user_id');
            $ticket->save();

            // Log data ticket yang diperbarui
            Log::info('Updated ticket: '.$ticket->id.' - User ID: '.$ticket->user_id);

            return redirect()->route('dashboard')->with('success', 'Tiket berhasil diperbarui.');
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


