<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
 {{-- css --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

 {{-- javascript --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

{{-- <body>
   
      <div class="container" id="container">
            <div class="header" id="header">
                <div class="pull-right flush-right">
                    <p>
                                             Guest User |                     <a href="/login.php">Sign In</a>
                    </p>
                </div>
                <a class="pull-left" id="logo" href="/index.php"
                    title="Support Center">
                <span class="valign-helper"></span>
                    <img src="{{ asset('images/support center.png') }}" alt="support center" height="60"  alt="Pusat Pengaduan TIK UNSRI">
                        </a>
                </div>
            <div class="clear">
                <ul id="nav" class="flush-left">
                    <li><a class="active home" href="/index.php" >Support Center Home</a></li>
                    <li><a class="new" href="/open.php">Open a New Ticket</a></li>
                    <li><a class="status" href="/view.php">Check Ticket Status</a></li>
                </ul>

            </div>

            <div class="open" id="content">
           
            <h1>Sign in to Pusat Pengaduan TIK UNSRI</h1>
                <p>To better serve you, we encourage our Clients to register for an account.</p>
                <form action="login.php" method="post" id="clientLogin">
                    <input type="hidden" name="__CSRFToken__" value="9ee4a80495ec93a0773277ad6a5cfca6f8ddb546" /><div style="display:table-row">
                    <div class="login-box">
                    <strong></strong>
                    <div>
                        <input id="username" placeholder="Email or Username" type="text" name="luser" size="30" value="" class="nowarn">
                    </div>
                    <div>
                        <input id="passwd" placeholder="Password" type="password" name="lpasswd" size="30" value="" class="nowarn"></td>
                    </div>
                    <p>
                        <input class="btn" type="submit" value="Sign In">
                    </p>
                    </div>
                    <div style="display:table-cell;padding: 15px;vertical-align:top">
                    <div style="margin-bottom: 5px">
                    Not yet registered? <a href="account.php?do=create">Create an account</a>
                    </div>
                    <div>
                    <b>I'm an agent</b> —
                    <a href="/scp/">sign in here</a>
                    </div>
                    </div>
                </div>
                </form>
                <br>
                <p>
                If this is your first time contacting us or you've lost the ticket number, please <a href="open.php"> open a new ticket </a></p>
                        </div>
                    </div>
    <footer>
        <div  id="footer">
            <p>Copyright &copy; 2024 Pusat Pengaduan TIK UNSRI - All rights reserved.</p>
                <a id="poweredBy" href="https://osticket.com" target="_blank">Helpdesk software - powered by osTicket</a>
        </div>
        <br>
        <div id="overlay"></div>
    <div id="loading">
        <h4>Please Wait!</h4>
        <p>Please wait... it will take a second!</p>
    </div>
    </footer> --}}

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
                            <h1>Sign in to Pusat Pengaduan TIK UNSRI</h1>
                            <p>Please provide your email address and a ticket number. An access link will be emailed to you.</p>
                             </div>
                              <div class="card-body"> 
                                @if ($errors->any()) 
                                    <div class="alert alert-danger">
                                        <ul> @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li> @endforeach 
                                        </ul> 
                                    </div> 
                                    @endif 
                                     <form action="{{ route('signin') }} " method="POST" > @csrf  
                                        <div class="mb-3 "> 
                                            <label for="email" class="form-label ">Email address</label> 
                                        <input type="email" class="form-control border-dark" id="email" name="email" required> </div> 
                                        <div class="mb-3"> 
                                            <label for="password" class="form-label">Password</label>
                                             <input type="password" class="form-control border-dark" id="password" name="password" required> 
                                            </div> 
                                            <button type="submit" class="btn btn-primary w-100">Sign In</button> 
                                    </form> 
                                    <div class="mt-3"> 
                                        Not yet registered?   <a href="{{ route('Admin.register') }}" class=" text-left"> Create an account</a> 
                                        
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    
                    <p class="mt-3 ml-5 bg-secondary-emphasis text-center">
                        If this is your first time contacting us or you've lost the ticket number, please    <a href="" class="text-center"> open a new ticket </a>
                    </p>
                </div>

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