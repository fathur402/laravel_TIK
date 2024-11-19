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

 {{-- javascript --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

 <body> 
    <div class="container-flex mt-3 "> 
        <header class="text-center"> 
            <div class="header" id="header">
                <a  id="logo" href="/index.php" title="Support Center">
                    <span class="valign-helper">
                        <img src="{{ asset('images/support center.png') }}" alt="support center" height="60"  alt="Pusat Pengaduan TIK UNSRI">
                </a>

                {{-- <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav ml-auto"> 
                @auth 
                <li class="nav-item"> 
                <a class="nav-link" href="{{ route('profile') }}">Profile</a> 
                </li> 
                <li class="nav-item"> 
                <form method="POST" action="{{ route('logout') }}"> 
                @csrf 
                <button type="submit" class="nav-link btn btn-link">Logout</button>
                 </form> 
                 </li>
                  @endauth --}}
              
                  <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                    <div class="collapse navbar-collapse" id="navbarNav"> 
                        <ul class="navbar-nav ml-auto"> 
                            @auth 
                            <div class="nav-item dropdown justify-content-end"> 
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                    {{ Auth::user()->name }} </a> 
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                                        <a class="dropdown-item" href="{{ route('profile') }}">Profile</a> 
                                        <form method="POST" action="{{ route('signout') }}"> 
                                            @csrf 
                                            <button type="submit" class="dropdown-item">Signout</button> 
                                        </form> 
                                    </div> 
                                </div> 
                                 @endauth 
                        </ul> 
                    </div> 
                </nav> 
                    </span>
             </div>                    
        </header>
        
  
                    <div class="container-flex"> <h1>Dashboard</h1>
                        <p>Welcome, {{ $user->name }}!</p>
                    </div>
                    <div class="container"> 
                        <h1>Profile</h1> 
                        @if (session('success'))
                        <div class="alert alert-success"> {{ session('success') }}
                             </div> 
                        @endif 
                        <form method="POST" action="{{ route('profile.update') }}">
                             @csrf 
                             <div class="form-group"> 
                                <label for="name">Name</label>
                                 <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="email">Email</label> 
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required> 
                                </div>
                                 <button type="submit" class="btn btn-primary">Update Profile</button> 
                                </form> 
                                <form method="POST" action="{{ route('profile.password.update') }}" class="mt-4"> 
                                    @csrf 
                                    <div class="form-group"> 
                                        <label for="current_password">Current Password</label> 
                                        <input type="password" class="form-control" id="current_password" name="current_password" required> 
                                    </div> 
                                    <div class="form-group">
                                         <label for="password">New Password</label> 
                                         <input type="password" class="form-control" id="password" name="password" required> 
                                        </div> 
                                        <div class="form-group"> 
                                            <label for="password_confirmation">Confirm New Password</label> 
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                         </div>
                                          <button type="submit" class="btn btn-primary">Update Password</button>
                                </form> 
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" 
                                    onsubmit="return confirm('Anda yakin ingin menghapus pengguna ini?');"> 
                                    @csrf
                                     @method('DELETE') 
                                     <button type="submit" class="btn btn-danger">Hapus akun</button> 
                                </form>
                </div>




       
 
        
       
      
            <script src="https://code.jquery.com/jquery-3.5.1.min.js">
           </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
            </script>
            <script src="scripts.js">
            </script> 
                    
            </body>
            <footer class="text-center mt-3"> 
                <p>&copy; 2024 Pusat Pengaduan TIK UNSRI - All rights reserved.</p>
                <p>powered by osTicket</p> 
            </footer>

</html>                                                       