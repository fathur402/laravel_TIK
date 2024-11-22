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
            <div class="col-lg">
                <div class="card m-2 border-primary">
                    <div class="card-header text-center d-flex justify-content-between align-items-center">
                        <div style="position: absolute; left: 50%; transform: translateX(-50%);">
                        <h1 >List Ticket</h1>
                    </div>
                        <div class="d-flex flex-column align-items-end" style="gap: 5px;">
                            <span class="badge bg-primary">Total Tickets: {{ $totalTickets }}</span> 
                            <span class="badge bg-success">Processed: {{ $processedTickets }}</span> 
                            <span class="badge bg-info">User Processing:
                            @if(isset($userProcessingTickets) && $userProcessingTickets->tickets_count > 0) 
                                {{ $userProcessingTickets->name }}: 
                                {{ $userProcessingTickets->tickets_count }}
                                 @else  {{ $user->name }}, Tidak ada ticket yang anda proses
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="card-body fw-bold">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">{{ $message }}</div>
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
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Nama Lengkap</th>
                                    <th>No HP/WA</th>
                                    <th>Topik</th>
                                    <th>Dibuat Pada</th>
                                    <th>Status</th>
                                    <th>Diubah Pada</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allTicket as $no => $singleTicket)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $singleTicket->email }}</td>
                                        <td>{{ $singleTicket->name }}</td>
                                        <td>{{ $singleTicket->phone }}</td>
                                        <td>{{ $singleTicket->topic }}</td>
                                        <td>{{ $singleTicket->created_at }}</td>
                                        <td>{{ $singleTicket->status }}</td>
                                        <td>{{ $singleTicket->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('Admin.edit', $singleTicket->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('Admin.delete', $singleTicket->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
         <!-- Tambahkan Script Kustom --> 
         <script src="{{ asset('js/scripts.js') }}">
        </script> 
       <script> document.addEventListener('DOMContentLoaded', 
       (event) => { console.log('DOM fully loaded and parsed'); }); 
       </script>



        </body>

            <footer class="text-center mt-3"> 
                <p>&copy; 2024 Pusat Pengaduan TIK UNSRI - All rights reserved.</p>
                <p>powered by osTicket</p> 
            </footer>

</html>                                                       