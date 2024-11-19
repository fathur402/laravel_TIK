<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Ticket</title>
  
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
                    <a  id="logo" href="/index.php"
                        title="Support Center">
                    <span class="valign-helper">
                        <img src="{{ asset('images/support center.png') }}" alt="support center" height="60"  alt="Pusat Pengaduan TIK UNSRI">
                            </a>

                            <form method="POST" action="{{ route('signout') }}"> 
                                @csrf 
                                <button type="submit">Signout</button> 
                            </form> 
                         
                    </span>
                </div>      s
            </header>
    
          
                 <div class="d-flex flex-row justify-content-center bg-light border-primary">
                     <div class="col-lg-11 "> 
                        <div class="card m-2 border-primary">
                         <div class="card-header text-left">
                            <h1>Edit Ticket</h1>
                         </div>
                              <div class="card-body fw-bold"> 

                                        @if (session('success'))
                                             <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  {{ session('success') }}
                                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <form action="{{ route('Admin.update', $ticket->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address :</label>
                                                <input type="email" class="form-control border-dark" id="email" name="email" value="{{ $ticket->email }}" required>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama Lengkap :</label>
                                                <input type="text" class="form-control border-dark" id="name" name="name" value="{{ $ticket->name }}" required>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone Number / WA :</label>
                                                <input type="number" class="form-control border-dark" id="phone" name="phone" value="{{ $ticket->phone }}" required>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="topic" class="form-label">Help Topic :</label>
                                                <select class="form-select border-dark" id="topic" name="topic" required>
                                                    <option selected>-- Select Topic --</option>
                                                    @foreach ($topics as $value => $label)
                                                        <option value="{{ $value }}" {{ $ticket->topic == $value ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="status" class="form-label">Status :</label>
                                                <select class="form-select border-dark" id="status" name="status" required>
                                                    <option value="belum diproses" {{ $ticket->status == 'belum diproses' ? 'selected' : '' }}>Belum Diproses</option>
                                                    <option value="sedang diproses" {{ $ticket->status == 'sedang diproses' ? 'selected' : '' }}>Sedang Diproses</option>
                                                    <option value="selesai" {{ $ticket->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                                </select>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>



                                        {{-- 
                                            <!-- Form tambahan akan muncul di sini --> 
                                            <div id="additionalFields" class="hidden"> 
                                                <!-- Form untuk Pembuatan Email Unsri --> 
                                                <div id="email_unsri_form" class="hidden"> 
                                                    <div class="form-group">
                                                        <div class="mb-0"> 
                                                        <label for="topic" class="form-label">Pembuatan Email UNSRI</label>
                                                    </div> 
                                                         <label for="nim_nip">NIM/NIP/NIPUS/NIDN:</label>
                                                          <input type="text" id="nim_nip" name="nim_nip" class="form-control" required> </div> 
                                                        <div class="form-group"> <label for="faculty">Fakultas/Lembaga/Unit Kerja:</label> 
                                                            <input type="text" id="faculty" name="faculty" class="form-control" required> </div> 
                                                        <div class="form-group"> <label for="full_name">Nama Lengkap:</label> 
                                                            <input type="text" id="full_name" name="full_name" class="form-control" required> </div> 
                                                        <div class="form-group"> <label for="phone_no">No. Handphone:</label> 
                                                            <input type="text" id="phone_no" name="phone_no" class="form-control" required> </div> 
                                                        
                                                        <div class="form-group"> <label for="file_upload">Upload KPM/Karpeg/Surat Pengajuan:</label> 
                                                            <input type="file" id="file_upload" name="file_upload" class="form-control" accept=".png, .jpg, .jpeg, .xlsx, .xls, .doc, .docx" required> </div> 
                                                        <div class="form-group"> <label for="confirmation_email">Alamat E-mail:</label> 
                                                                <input type="email" id="confirmation_email" name="confirmation_email" class="form-control" required> </div> 
                                                        <div class="form-group"> <label for="request_detail">Detail Permintaan:</label> 
                                                            <textarea id="request_detail" name="request_detail" class="form-control" rows="3" required></textarea> </div> 
                                                        </div> 

                                                        <!-- Form untuk Reset Password Email Unsri --> 
                                                    <div id="email_reset_form" class="hidden"> 
                                                        
                                                        <div class="mb-0"> 
                                                            <label for="topic" class="form-label">Reset Email UNSRI</label>
                                                        </div> 
                                                        <label for="nim_nip">NIM/NIP/NIPUS/NIDN:</label>
                                                         <input type="text" id="nim_nip" name="nim_nip" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="faculty">Fakultas/Lembaga/Unit Kerja:</label> 
                                                           <input type="text" id="faculty" name="faculty" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="full_name">Nama Lengkap:</label> 
                                                           <input type="text" id="full_name" name="full_name" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="phone_no">No. Handphone:</label> 
                                                           <input type="text" id="phone_no" name="phone_no" class="form-control" required> </div> 
                                                       
                                                        <!-- Hanya bagian "upload file" yang berbeda --> 
                                                        <div class="form-group"> 
                                                            <label for="file_upload_reset">Upload Surat Permintaan Reset Password:</label> 
                                                                <input type="file" id="file_upload_reset" name="file_upload_reset" class="form-control" accept=".png, .jpg, .jpeg, .xlsx, .xls, .doc, .docx" required> </div> 
                                                        <div class="form-group"> 
                                                            <label for="confirmation_email_reset">Alamat E-mail:</label> 
                                                                <input type="email" id="confirmation_email_reset" name="confirmation_email_reset" class="form-control" required> </div> 
                                                        <div class="form-group"> 
                                                            <label for="request_detail_reset">Detail Permintaan:</label>
                                                                <textarea id="request_detail_reset" name="request_detail_reset" class="form-control" rows="3" required></textarea> </div> 
                                                        </div>
                                                        
                                                        <!-- Form untuk VPN Unsri --> 
                                                    <div id="vpn_unsri_form" class="hidden"> 
                                                        
                                                        <div class="mb-0"> 
                                                            <label for="topic" class="form-label">VPN UNSRI</label>
                                                        </div> 
                                                        <label for="nim_nip">NIM/NIP/NIPUS/NIDN:</label>
                                                         <input type="text" id="nim_nip" name="nim_nip" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="faculty">Fakultas/Lembaga/Unit Kerja:</label> 
                                                           <input type="text" id="faculty" name="faculty" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="full_name">Nama Lengkap:</label> 
                                                           <input type="text" id="full_name" name="full_name" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="phone_no">No. Handphone:</label> 
                                                           <input type="text" id="phone_no" name="phone_no" class="form-control" required> </div> 
                                                   
                                                        <!-- Hanya bagian "upload file" yang berbeda --> 
                                                        <div class="form-group"> 
                                                            <label for="file_upload_vpn">Upload Surat Permintaan VPN:</label> 
                                                                <input type="file" id="file_upload_vpn" name="file_upload_vpn" class="form-control" accept=".png, .jpg, .jpeg, .xlsx, .xls, .doc, .docx" required> </div> 
                                                        <div class="form-group"> 
                                                            <label for="confirmation_email_vpn">Alamat E-mail:</label> 
                                                                <input type="email" id="confirmation_email_vpn" name="confirmation_email_vpn" class="form-control" required> </div> 
                                                        <div class="form-group"> 
                                                            <label for="request_detail_vpn">Detail Permintaan:</label> 
                                                                <textarea id="request_detail_vpn" name="request_detail_vpn" class="form-control" rows="3" required></textarea> </div> 
                                                        </div> 
                                                        <!-- Form untuk Akses Internet --> 
                                                    <div id="akses_internet_form" class="hidden"> 
                                                        
                                                        <div class="mb-0"> 
                                                            <label for="topic" class="form-label">Akses Internet UNSRI</label>
                                                        </div> 
                                                        <label for="nim_nip">NIM/NIP/NIPUS/NIDN:</label>
                                                         <input type="text" id="nim_nip" name="nim_nip" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="faculty">Fakultas/Lembaga/Unit Kerja:</label> 
                                                           <input type="text" id="faculty" name="faculty" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="full_name">Nama Lengkap:</label> 
                                                           <input type="text" id="full_name" name="full_name" class="form-control" required> </div> 
                                                       <div class="form-group"> <label for="phone_no">No. Handphone:</label> 
                                                           <input type="text" id="phone_no" name="phone_no" class="form-control" required> </div> 
                                             
                                                        <!-- Hanya bagian "upload file" yang berbeda --> 
                                                        <div class="form-group"> 
                                                            <label for="file_upload_internet">Upload Surat Pengaduan Masalah Akses Internet:</label> 
                                                                <input type="file" id="file_upload_internet" name="file_upload_internet" class="form-control" accept=".png, .jpg, .jpeg, .xlsx, .xls, .doc, .docx" required> </div> 
                                                        <div class="form-group"> 
                                                            <label for="confirmation_email_internet">Alamat E-mail:</label> 
                                                                <input type="email" id="confirmation_email_internet" name="confirmation_email_internet" class="form-control" required> </div> 
                                                        <div class="form-group"> 
                                                            <label for="request_detail_internet">Detail Permintaan:</label> 
                                                                <textarea id="request_detail_internet" name="request_detail_internet" class="form-control" rows="3" required></textarea> </div> 
                                                        </div>
                                                    </div>
                                               </div>
                                             --}}
                   
                            </div> 
                        </div> 
                    </div> 
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