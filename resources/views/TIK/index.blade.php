<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
 {{-- css --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

 {{-- javascript --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>


            <body> 
                {{-- <div class="container-flex mt-3"> 
            <header class="text-center"> 
                <div class="header" id="header">
                    <a  id="logo" href="/index.php" title="Support Center">
                    <span class="valign-helper">
                        <img src="{{ asset('images/support center.png') }}" alt="support center" height="60"  alt="Pusat Pengaduan TIK UNSRI">
                            </a>
                            <p>Guest User |<a href="/login.php">Sign In</a></p>
                    </span>
                </div>    --}}
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


                        <main class="m-5 text-center"> 
                            <h2>Welcome to the Support Center</h2> 
                            <p>In order to streamline support requests and better serve you, we utilize a support ticket system. Every support request is assigned a unique ticket number which you can use to track the progress and responses online. For your reference, we provide complete archives and history of all your support requests. A valid email address is required to submit a ticket.</p> 
                            <div class="buttons mt-4"> 
                                <button onclick="location.href='/open'" class="btn-primary">Open a New Ticket</button> 
                                <button onclick="location.href='/check'" class="btn-secondary">Check Ticket Status</button> 
                            </div> 
                        </main> 
                  
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