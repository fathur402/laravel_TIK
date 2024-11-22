<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
                        <p><a href="{{ route('Admin.sign') }}" ><i class="fa-regular fa-user-tie"></i>Admin Sign In</a></p>
                    </span>
                </div>      
            <nav>
                <a href="{{ route('TIK.index') }}" class="btn btn-link1"><i class="bi bi-house-door"></i>Support Center Home</a> 
                <a href="{{ route('TIK.open') }}" class="btn btn-link"> <i class="bi bi-file-earmark-plus"></i>Open a New Ticket</a>
                <a href="{{ route('TIK.check') }}" class="btn btn-link"><i class="bi bi-search"></i>Check Ticket Status</a>
           </nav> 
            </header>
    
          
                 <div class="d-flex flex-row justify-content-center bg-light border-primary">
                     <div class="col-lg-11 "> 
                        <div class="card m-2 border-primary">
                         <div class="card-header text-left">
                            <h1>Account Registration</h1>
                            <p>Use the forms below to create or update the information we have on file for your account</p>   
                         </div>
                              <div class="card-body fw-bold"> 
                                @if ($errors->any()) 
                                    <div class="alert alert-danger">
                                        <ul> @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li> @endforeach 
                                        </ul> 
                                    </div>
                                     @endif 
                                @if (session('success')) 
                                <div class="alert alert-success"> 
                                    {{ session('success') }} 
                                </div> 
                                @endif
                                     <form action="{{ route('registrasi') }} " method="POST" > @csrf  
                                        <div class="form-header">
                                            <h5>Formulir Pendaftaran</h5>
                                        <div class="mb-3"> 
                                            <label for="name" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control border-dark" id="name" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label ">Email Address :</label> 
                                            <input type="email" class="form-control border-dark" id="email" name="email" required>
                                         </div> 
                                        {{-- <div class="mb-3"> 
                                            <label for="ticket-number" class="form-label">Ticket Number :</label>
                                             <input type="ticket-number" class="form-control border-dark" id="ticket-number" name="ticket-number" required> 
                                            </div>  --}}
                                         <div class="mb-3"> 
                                            <label for="phone" class="form-label">Phone Number / WA</label> 
                                            <input type="number" class="form-control border-dark" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  required>     
                                            </div>
                                            {{-- <div class="mb-3"> <label for="timezone" class="form-label">Time Zone</label>
                                                 <select class="form-select border-primary" id="timezone" name="timezone" required>
                                                     <option value="" disabled selected>Select your time zone</option>
                                                 </select> 
                                            </div> --}}
                                        <div class="mb-3"> 
                                            <label for="password" class="form-label">Create New Password</label>
                                            <input type="password" class="form-control border-primary" id="password" name="password" required>
                                            </div> 
                                        <div class="mb-3"> 
                                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control border-primary" id="password_confirmation" name="password_confirmation" required> 
                                            </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3"> 
                                                <button type="submit" class="btn btn-primary me-md-2" onclick="newRegister()">Register</button> 
                                                <button type="button" class="btn btn-danger" onclick="cancelAction()">Cancel</button>
                                            </div>
                                    </form>         
                                </div> 
                            </div> 
                        </div> 
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
        <p>&copy; 2024 Pusat Pengaduan TIK UNSRI - All rights reserved.</p>
        <p>powered by osTicket</p> 
    </footer>
    
</html>                                                       