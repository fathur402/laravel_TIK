<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Ticket</title>
 {{-- css --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


</head>

 <body> 
    <div class="container-flex mt-3"> 
        <header class="text-center"> 
            <div class="header" id="header">
                <a  id="logo" href="{{ route('TIK.index') }}" title="Support Center">
                <span class="valign-helper">
                        <img src="{{ asset('images/support center.png') }}" alt="support center" height="60"  alt="Pusat Pengaduan TIK UNSRI">
                </a>
                <div class="dropdown-container"> 
                    @auth
                     <div class="dropdown">
                         <a class="btn text-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            {{ $user->name }} </a>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"> 
                                <a class="dropdown-item" href="{{ route('profile',['id' => $user->id]) }}">Profile</a>
                                 <form method="POST" action="{{ route('signout') }}"> 
                                    @csrf 
                                    <button type="submit" class="dropdown-item">Signout</button> 
                                </form> 
                            </div> 
                        </div>
                         @endauth 
                        </div>
                    </span>
             </div>                    
        </header>
        

        <div class="d-flex flex-row justify-content-center bg-light border-primary">
            <div class="col-lg-11 "> 
               <div class="card m-2 border-primary">
                <div class="card-header text-left">
                        <h1>Profile</h1> 
                    </div>
                        @if (session('success'))
                        <div class="alert alert-success"> {{ session('success') }}
                             </div> 
                        @endif 
                        <form method="POST" action="{{ route('profile.update', ['id' => $user->id]) }}">
                            @csrf 
                            <div class="mb-3">
                                <label for="name" class="form-label text-uppercase font-weight-bold" style="font-size: 14px; margin-left: 10px;">Name</label>
                                <input type="text" class="form-control border-dark" id="name" name="name" value="{{ $user->name }}" required> 
                            </div> 
                            <div class="mb-3">
                                <label for="email" class="form-label text-uppercase font-weight-bold" style="font-size: 14px; margin-left: 10px;">Email Address</label>
                                <input type="email" class="form-control border-dark" id="email" name="email" value="{{ $user->email }}" required> 
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button> 
                        </form>
                        
                        <form method="POST" action="{{ route('profile.password.update', ['id' => $user->id]) }}" class="mt-4"> 
                            @csrf   
                                <div class="mb-3">
                                    <label for="current_password" class="form-label text-uppercase font-weight-bold" style="font-size: 14px; margin-left: 10px;">Current Password</label>
                                    <input type="password" class="form-control border-dark" id="current_password" name="current_password" required> 
                                </div> 
                                <div class="mb-3">
                                    <label for="password" class="form-label text-uppercase font-weight-bold" style="font-size: 14px; margin-left: 10px;">New Password</label>
                                    <input type="password" class="form-control border-dark" id="password" name="password" required> 
                                </div> 
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label text-uppercase font-weight-bold" style="font-size: 14px; margin-left: 10px;">Confirm New Password</label>
                                    <input type="password" class="form-control border-dark" id="password_confirmation" name="password_confirmation" required>
                                </div>
                                    <button type="submit" class="btn btn-primary">Update Password</button>
                        </form> 
                                <br>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" 
                                onsubmit="return confirm('Anda yakin ingin menghapus pengguna ini?'); margin-left: 10px;"> 
                                @csrf
                                @method('DELETE') 
                                    <button type="submit" class="btn btn-danger">Hapus akun</button> 
                        </form>
                                <a href="{{ route('dashboard') }}" class="btn btn-dark mt-3">Kembali ke Dashboard</a>
                            </div>
                        </div>
                     </div>
                    </div>
      
            <!-- Tambahkan JS Bootstrap Bundle (termasuk Popper.js) --> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script> 
            <!-- Tambahkan JS jQuery --> 
            <script src="https://code.jquery.com/jquery-3.5.1.min.js">
            </script>

            <script src="scripts.js">
            </script> 
                    
        </body>
        
            <footer class="text-center mt-3"> 
                <p>&copy; margin-left: 10px; 2024 Pusat Pengaduan TIK UNSRI - All rights reserved.</p>
                <p>powered by osTicket</p> 
            </footer>

</html>                                                       