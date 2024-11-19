<?php

use  App\Http\Controllers\halo\halocontroller;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;


// Routes function
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/halo', function(){
//     return view('Coba.halo');
// });

// Route::get('/halo', [halocontroller::class, 'sapa']);

// Route::get('/home', function () { return view('TIK.Home'); });
// Route::get('/open', function(){ return view('TIK.open'); });
// Route::get('/check', function(){ return view('TIK.check'); });
// Route::get('/list', function(){ return view('TIK.list'); });
// Route::get('/index', function(){ return view('TIK.index'); }); 
Route::get('/contoh', function(){ return view('Coba.contoh'); });

// route untuk menampilkan homepage UPT TIK
Route::get('/ulang', function(){ return view('TIK.ulang'); });


// Controller-based routes
// route untuk laman depan
Route::get('/index',  [TicketController::class, 'ticket']) -> name('TIK.index');

//  route untuk menampilkan laman registrasi
Route::get('/register', function(){ return view('Admin.register'); })->name('Admin.register');
// route untuk proses registrasi
Route::post('/register', [TicketController::class, 'register'])->name('registrasi');

// route untuk menampilkan laman signin
Route::get('/sign', function() { return view('Admin.sign'); })->name('Admin.sign');
// Route untuk proses signin 
Route::post('/signin', [TicketController::class, 'signin'])->name('signin'); 

// Route untuk menampilkan dashboard admin
 Route::get('/dashboard', [TicketController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
 // route untuk laman daftar/list ticket
//  Route::get('/tickets',  [TicketController::class, 'show'])->name('Admin.list');
 // Route::get('/ticket/{ticket}', [TicketController::class, 'show'])->name('TIK.show');
 
// route untuk laman open ticket
Route::get('/open',  [TicketController::class, 'create']) -> name('TIK.open');
Route::post('/open', [TicketController::class, 'store'])->name('TIK.store');

// route untuk laman cek ticket
Route::get('/check',  [TicketController::class, 'check']) -> name('TIK.check');
Route::post('/find-ticket', [TicketController::class, 'find'])->name('TIK.find');

// route untuk edit ticket
Route::get('/Admin/edit/{id}', [TicketController :: class, 'edit' ]) -> name('Admin.edit');
Route::patch('/Admin/update/{id}', [TicketController :: class, 'update' ]) -> name('Admin.update');

// route untuk delete
Route::delete('/Admin/delete/{id}', [TicketController :: class, 'delete' ]) -> name('Admin.delete');

// route untuk profile admin yang terdiri dari menuju halaman profile admin dan sign out
Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', [TicketController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [TicketController::class, 'showProfile'])->name('profile');
    Route::post('/profile', [TicketController::class, 'updateProfile'])->name('profile.update');
    Route::post('/profile/password', [TicketController::class, 'updatePassword'])->name('profile.password.update');
    Route::post('/signout', [TicketController::class, 'signout'])->name('signout');
    Route::delete('/user/{id}', [TicketController::class, 'destroyUser'])->name('user.destroy');
});

