@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profile</h1>
    <div class="card">
        <div class="card-header">
            Profile Information
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <!-- Tambahkan informasi lainnya jika diperlukan -->
        </div>
    </div>
</div>
@endsection


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
               <p>
                <form method="POST" action="{{ route('signout') }}" class="border-0"> 
                    @csrf 
                    <button type="submit">Signout</button> 
                </form> 

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
                </p>
                    </span>
             </div>                    
        </header>
        
       <div class="d-flex flex-row justify-content-center bg-light border-primary">
           <div class="col-lg">
               <div class="card m-2 border-primary">
                   <div class="card-header text-center">
                       <h1>Dashboard Admin</h1>
                       <div class="container">
                            <div class="card">
                                <div class="card-header">
                                  Profile Information
                                </div>
                          <div class="card-body">
                            <p><strong>Name:</strong> {{ $user->name }}</p>
                            <p><strong>Email:</strong> {{ $user->email }}</p>
                            <p><strong>Phone:</strong> {{ $user->phone }}</p>
                            <!-- Tambahkan informasi lainnya jika diperlukan -->
                         </div>
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
                                   <th>Dibuat Pada : </th>
                                   <th>Status</th>
                                   <th>Diubah Pada : </th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($allTicket as $no=>$singleTicket)
                                   <tr>
                                        <td>{{ $no+1 }}</td>
                                       <td>{{ $singleTicket->email }}</td>
                                       <td>{{ $singleTicket->name }}</td>
                                       <td>{{ $singleTicket->phone }}</td>
                                       <td>{{ $singleTicket->topic }}</td>
                                       <td>{{ $singleTicket->created_at }}</td>
                                       <td>{{ $singleTicket->status }}</td>
                                       <td>{{ $singleTicket->updated_at }}</td>
                                       <td>
                                        <a href="{{ route('Admin.edit', $singleTicket->id) }}" class="btn btn-sm btn-warning">edit</a>
                                        <form action="{{ route('Admin.delete', $singleTicket->id) }}" method="POST" >
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


       
    </table>
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