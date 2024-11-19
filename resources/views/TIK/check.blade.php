<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Ticket</title>
    
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

   
    {{-- javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
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
                            <h1>Check Ticket Status</h1>
                            <p>Please provide your email address and a ticket number. An access link will be emailed to you.</p>    </div>
                              <div class="card-body"> 
                                @if ($errors->any()) 
                                    <div class="alert alert-danger">
                                        <ul> @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li> @endforeach 
                                        </ul> 
                                    </div> @endif 
                                     {{-- <form action="{{ route('TIK.find') }} " method="POST" > @csrf  
                                        <div class="mb-3 "> 
                                            <label for="email" class="form-label ">Email Address :</label> 
                                        <input type="email" class="form-control border-dark" id="email" name="email" required> </div> 
                                        <div class="mb-3"> 
                                            <label for="ticket-number" class="form-label">Ticket Number :</label>
                                             <input type="ticket-number" class="form-control border-dark" id="ticket-number" name="ticket-number" required> 
                                            </div> 
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3"> 
                                            <button type="submit" class="btn btn-primary ">Cek Ticket Anda</button> 
                                            </div>
                                    </form>  --}}
                                    <form id="check-ticket-form">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address :</label>
                                            <input type="email" class="form-control border-dark" id="email" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="ticket_id" class="form-label">Ticket Number :</label>
                                            <input type="text" class="form-control border-dark" id="ticket_id" name="ticket_id" required>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
                                            <button type="submit" class="btn btn-primary">Cek Tiket Anda</button>
                                        </div>
                                    </form>
                                    
                                </div> 
                            </div> 
                        </div> 
                    </div> 

                    <!-- Modal --> 
                    <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true"> 
                        <div class="modal-dialog"> 
                            <div class="modal-content"> 
                                <div class="modal-header"> 
                                    <h5 class="modal-title" id="ticketModalLabel">Detail Tiket</h5> 
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                                    </div> 
                                    <div class="modal-body"> 
                    <!-- Konten tiket akan ditampilkan di sini --> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                    <script> document.getElementById('check-ticket-form').addEventListener('submit', 
                    function(event) { event.preventDefault(); 
                        let formData = new FormData(this); 
                        fetch('{{ route("TIK.find") }}', 
                        { method: 'POST', headers: { 'X-CSRF-TOKEN': formData.get('_token'), 'Accept': 'application/json', }, body: formData }) 
                        .then(response => response.json()) .then(data => { 
                            if (data.success) { 
                                document.querySelector('#ticketModal .modal-body').innerHTML = ` 
                                <p><strong>Email:</strong> ${data.ticket.email}</p> 
                                <p><strong>Nama:</strong>  ${data.ticket.name}</p>
                                <p><strong>No HP/WA:</strong>  ${data.ticket.phone}</p> 
                                <p><strong>Topik:</strong>  ${data.ticket.topic}</p> 
                                <p><strong>Status:</strong>  ${data.ticket.status}</p> 
                                <p><strong>Tanggal Dibuat:</strong> ${data.ticket.created_at}</p> `; 
                                    var ticketModal = new bootstrap.Modal(document.getElementById('ticketModal')); 
                                        ticketModal.show(); } 
                                        else { alert('Ticket not found'); 
                                                } 
                                            })
                                             .catch(error => { console.error('Error:', error);
                                              }); 
                                            }); 
                    </script>
                    
                    <p class="mt-3 ml-5 bg-secondary-emphasis text-center">
                        If this is your first time contacting us or you've lost the ticket number, please    <a href="" class="text-center"> open a new ticket </a>
                    </p>
                </div>
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