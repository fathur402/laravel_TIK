{{-- Routing (web.php)


// Halaman open ticket
Route::get('/open', [TicketController::class, 'create'])->name('tickets.open');
Route::post('/open', [TicketController::class, 'store'])->name('tickets.store');

// Halaman list ticket
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');

// Halaman check ticket
Route::get('/check', [TicketController::class, 'checkForm'])->name('tickets.checkForm');
Route::post('/check', [TicketController::class, 'check'])->name('tickets.check');


Controller(TicketController.php)


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    // Menampilkan form untuk membuat tiket baru
    public function create()
    {
        return view('tickets.create');
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

        Ticket::create($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully');
    }

    // Menampilkan daftar tiket
    public function index()
    {
        $allTickets = Ticket::all();
        return view('tickets.index', compact('allTickets'));
    }

    // Menampilkan form untuk mengecek tiket
    public function checkForm()
    {
        return view('tickets.check');
    }

    // Mengecek dan menampilkan tiket berdasarkan ID
    public function check(Request $request)
    {
        $ticket = Ticket::where('email', $request->email)
                        ->where('id', $request->ticket_id)
                        ->first();

        if ($ticket) {
            return view('tickets.show', compact('ticket'));
        } else {
            return redirect()->back()->withErrors('Ticket not found.');
        }
    }
}



Form Open Ticket (tickets/create.blade.php):



@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Open Ticket</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Nama Lengkap:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">No HP/WA:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="topic">Topik:</label>
            <input type="text" name="topic" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection



List Ticket (tickets/index.blade.php):

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Daftar Tiket</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>No HP/WA</th>
                <th>Topik</th>
                <th>Tanggal Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allTickets as $singleTicket)
            <tr>
                <td>{{ $singleTicket->email }}</td>
                <td>{{ $singleTicket->name }}</td>
                <td>{{ $singleTicket->phone }}</td>
                <td>{{ $singleTicket->topic }}</td>
                <td>{{ $singleTicket->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection




Form Check Ticket (tickets/check.blade.php):

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Cek Tiket</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tickets.check') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ticket_id">ID Tiket:</label>
            <input type="text" name="ticket_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cek</button>
    </form>
</div>
@endsection


Detail Tiket (tickets/show.blade.php):

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Detail Tiket</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Topik: {{ $ticket->topic }}</h5>
            <p class="card-text">Email: {{ $ticket->email }}</p>
            <p class="card-text">Nama Lengkap: {{ $ticket->name }}</p>
            <p class="card-text">No HP/WA: {{ $ticket->phone }}</p>
            <p class="card-text">Tanggal Dibuat: {{ $ticket->created_at }}</p>
        </div>
    </div>
</div>
@endsection --}}
