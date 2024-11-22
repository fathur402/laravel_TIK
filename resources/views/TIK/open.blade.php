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
                            <h1>Open a New Ticket</h1>
                            <p>Please fill in the form below to open a new ticket.</p>   
                         </div>
                              <div class="card-body fw-bold"> 

                                {{-- @if ($message = Session::get('success')) 
                                <div class="alert alert-success alert-dismissible fade show" role="alert"> {{ $message }} 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div> 
                                @endif 
                                @if ($errors->any()) 
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                     <ul>
                                        @foreach ($errors->all() as $error) 
                                        <li>{{ $error }}</li> 
                                        @endforeach 
                                    </ul> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                        <span aria-hidden="true">&times;</span> 
                                    </button> 
                                </div>
                                 @endif --}}

                                 @if (session('success')) 
                                 <!-- Modal --> 
                                 <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true"> 
                                    <div class="modal-dialog"> 
                                        <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="successModalLabel">Sukses!</h5> 
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                                            </div> <div class="modal-body"> {{ session('success') }} 
                                                </div>
                                                <div class="modal-footer"> 
                                                    <a href="{{ route('TIK.check') }}" class="btn btn-primary">Cek Tiket Anda</a> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div> 

                                    <!-- Trigger modal --> 
                                    <script type="text/javascript"> 
                                    var successModal = new bootstrap.Modal(document.getElementById('successModal'), 
                                    { keyboard: false }); successModal.show(); 
                                    </script> 
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

                                     <form action="{{ route('TIK.store') }} " method="POST" > 
                                        @csrf  
                                        <div class="form-header">
                                            <h5>Contact Information</h5>
                                        <div class="mb-3"> 
                                            <label for="email" class="form-label ">Email Address :</label> 
                                        <input type="email" class="form-control border-dark" id="email" name="email" required> </div> 
                                        <div class="mb-3"> 
                                            <label for="nama" class="form-label">Nama Lengkap :</label>
                                             <input type="text" class="form-control border-dark" id="nama" name="name" required> 
                                            </div> 
                                            <div class="mb-3"> <label for="phone" class="form-label">Phone Number / WA</label> 
                                                <input type="number" class="form-control border-dark" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  required>
                                                 
                                            </div>
                                            <div class="mb-0"> 
                                                <label for="topic" class="form-label">Help Topic</label>
                                                </div> 
                                            <select class="form-select border-dark" aria-label="Default select example" id="topic" name="topic" class="form-control" required>
                                                <option selected>-- Select Topic --</option>
                                                <option value="email_unsri">Email Unsri / Pembuatan</option>
                                                <option value="reset_unsri">Email Unsri / Reset Password</option>
                                                <option value="vpn_unsri">VPN Unsri</option>
                                                <option value="internet_unsri">Akses Internet / Pengaduan Masalah</option>
                                              </select>
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
                                              <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3"> 
                                                <button type="submit" class="btn btn-secondary me-md-2">Create</button> 
                                              
                                                <button type="reset" class="btn btn-warning me-md-2">Reset</button> 
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