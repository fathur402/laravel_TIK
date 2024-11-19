<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPT - TIK Universitas Sriwijaya</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <ul>
            <div class="logo">
               <a href="#home"> <img src="{{ asset('images/logo tik.png') }}" alt="Logo UPT - TIK"></a>
            </div>
            <li><a href="#home">BERANDA</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">TENTANG KAMI </a>
                <div class="dropdown-content">
                    <a href="#tentang">Tentang Kami</a>
                    <a href="#visi">Visi Kami</a>
                    <a href="#misi">Misi Kami</a>
                </div>
            </li>
            <li><a href="#galeri">GALERI</a></li>
            <li><a href="#layanan">LAYANAN KAMI</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">ORGANISASI</a>
                <div class="dropdown-content">
                    <a href="#struktur">Struktur Organisasi</a>
                    <a href="#sdm">Sumber Daya Manusia</a>
                </div>
            </li>
            <li><a href="#berita">BERITA</a></li>
            <li><a href="#contact">HUBUNGI KAMI</a></li>
        </ul>
    </nav>
    
    <main1>
        <section class="content" id="home">
            <div class="image-section">
                <img src="{{ asset('images/support center1.png') }}" alt="Person at desk">
            </div>
            <div class="text-section">
            <h4 class="text-uppercase">Unit Pelaksana Teknis</h4>
            <h1>
                Teknologi Informasi dan Komunikasi					
            </h1>
            <button class="contact-button-1" a href="#" target="_blank">ICT@UNSRI.AC.ID</button>
        </div>
        </section>
    </main1>
    <main2>
        <div class="container" id="tentang">>
            <div class="image-section">
                <img src="{{ asset('images/gambar tentang kami.jpg') }}" alt="Person at desk">
            </div>

            <div class="text-section">
                <h1>Tentang Kami</h1>
                <p>UPT Teknologi Informasi dan Komunikasi Universitas Sriwijaya sebelumnya bernama UPT Pusat Komputer (Puskom) sesuai dengan Peraturan Menteri Riset, Teknologi dan Pendidkan Tinggi Republik Indonesia nomor 12 tahun 2015 tentang Organisasi dan Tata Kerja Universitas Sriwijaya pasal 111 ayat 1. UPT Teknologi Informasi dan Komunikasi merupakan Unit Pelaksana Teknis (UPT) di bidang pengembangan dan pengelolaan teknologi informasi dan komunikasi serta pengelolaan sistem informasi. Pembangunan dan pengembangan layanan TIK dan pengelolaan SI terus dikembangkan untuk meningkatkan kepuasan pelayanan kepada sivitas akademika Universitas Sriwijaya, pembangunan dan pengembangan TIK dan Sistem Informasi oleh UPT TIK merupakan kerja sama bersama seluruh Fakultas, Jurusan/Program Studi, Biro, Lembaga UPT, dan unit-unit kerja yang berada dalam lingkungan Universitas Sriwijaya. UPT TIK sebagai unit pelaksana teknis berusaha memberikan layanan terbaik di bidang Teknologi Informasi dan Komunikasi dan Sistem Informasi untuk memenuhi kebutuhan-kebutuhan universitas, sehingga pembangunan dan pengembangan dapat secara kontinyu dilakukan.</p>
                <a href="/laman-tentang-kami" class="contact-button">Selengkapnya -></a>
                
            </div>
        </div>
    </main2>
    <main3>
        <div class="container" id="visi">
          
            <div class="text-section">
                <h1>Visi Kami</h1>
                <p>“Terselenggaranya sistem informasi yang terintegrasi dengan didukung oleh teknologi informasi dan komunikasi yang mutakhir untuk mewujudkan Universitas Sriwijaya yang terkemuka dan unggul di berbagai cabang ilmu, teknologi, dan seni”.
                </p>
                <a href="/laman-visi-kami" class="contact-button">Selengkapnya -></a>
            </div>
              
            <div class="image-section">
                <img src="{{ asset('images/gambar visi kami.jpg') }}" alt="visi upt tik">
            </div>
        </div>
    </main3>
    <main4>
        <div class="container" id="misi">

            <div class="image-section">
                <img src="{{ asset('images/gambar misi kami.jpg') }}" alt="misi upt tik">
            </div>

            <div class="text-section">
                <h1>Misi Kami</h1>
                <p>-. Terselenggaranya Sistem Infrastruktur Jaringan yang Mutakhir<br>
                    -. Terselenggaranya Sistem Informasi yang Terintegrasi dan Mendukung "Index Kinerja Utama (IKU)" Universitas Sriwijaya <br>
                    -. Terselenggaranya Pangkalan Data Universitas Sriwijaya yang Tersingkronisasi dengan Pangkalan Data DIKTI <br>
                    -. Terselenggaranya Layanan TIK untuk Seluruh Stake Holder Lingkungan Universitas Sriwijaya dan Masyarakat Luas</p>
                <a href="/laman-misi-kami" class="contact-button">Selengkapnya -></a>
            </div>
        </div>
    </main4>
    <main5>
        <div class="container" id="galeri">
            <div class="slider">
                <h2>Galeri Kegiatan TIK</h2>
            <div class="wrapper">
                <div class="slide-container">

                    <div class="slide fade">
                      <img src="{{ asset('images/pimpinan tik.jpg') }}" alt="Person at desk">
                    </div>
                    <div class="slide fade">
                        <img src="{{ asset('images/team programming tik.jpg') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/teknisi infrastruktur tik.jpg') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/administrasi umum.jfif') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/pengelola barang tik.jfif') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/pengelola barang2 tik.jfif') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/pengelola dan pengolah data tik.jfif') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/pengelola server tik.jfif') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/sub koordinator tik.jfif') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/teknisi jaringan tik.jfif') }}" alt="Person at desk">
                      </div>
                      <div class="slide fade">
                        <img src="{{ asset('images/teknisi jaringan2 tik.jfif') }}" alt="Person at desk">
                      </div>
              
                    <a href="#" class="prev" title="Previous">&#10094</a>
                    <a href="#" class="next" title="Next">&#10095</a>
                  </div>
                  <div class="dots-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                    <span class="dot" onclick="currentSlide(5)"></span> 
                    <span class="dot" onclick="currentSlide(6)"></span> 
                    <span class="dot" onclick="currentSlide(7)"></span> 
                    <span class="dot" onclick="currentSlide(8)"></span> 
                    <span class="dot" onclick="currentSlide(9)"></span> 
                    <span class="dot" onclick="currentSlide(10)"></span> 
                    <span class="dot" onclick="currentSlide(11)"></span> 
                     </div>
                </div>
            </div>
        </div>
    </main5>
  
    
     <!-- Start service Area -->
     <main6>
        
        <section class="service-areasatu" id="layanan">
            <div class="overlay"></div>
                <div class="container">
                     <div class="row d-flex justify-content-center">
                         <div class="col-md-8 pb-40 header-text">
                            <h1>Layanan Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi</h1>
                        </div>
                    </div>
                <div class="row-1">
                            <!-- Start email Area -->

                            <div class="cardano" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Email Bagi Civitas UNSRI</h5>
                                  <p class="card-text">Email resmi UNSRI dengan alamat @unsri.ac.id disediakan bagi para dosen, staf, fakultas, jurusan, unit kerja dan lembaga resmi kampus lainnya. 
                                    Setiap mahasiswa UNSRI juga bisa menggunakan layanan email untuk mahasiswa. Akun email mahasiswa berupa @student.unsri.ac.id. selain email, 
                                    unsri juga mefasilitasi email instansinya dengan google drive unlimited secara gratis.
                                    </p>
                                  <a href="http://openticket.tik.unsri.ac.id/" class="btn btn-primary header-btn text-uppercase">Layanan Email Kami</a>
                                </div>
                              </div>
                            <!-- End email Area -->
    
                            <!-- Start VPN Area -->

                            <div class="cardano" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">VPN UNSRI</h5>
                                  <p class="card-text">UPT TIK Universitas Sriwijaya menyediakan layanan VPN bagi sivitas akademika UNSRI untuk dapat menggunakan beberapa aplikasi yang hanya diijinkan 
                                    diakses di dalam jaringan internal kampus. Selain untuk mengakses aplikasi yang hanya diijinkan didalam jaringan internal kampus VPN UNSRI juga 
                                    dapat digunakan sicitas UNSRI untuk mengakses Jurnal - Jurnal Berbayar Langganan Perpustakaan UNSRI. Layanan VPN yang tersedia di UNSRI adalah PPTP, 
                                    L2TP dan OPEN VPN yang tersedia untuk Windows, Android, Mac dan iOS. 
                                 </p>
                                  <a href="http://openticket.tik.unsri.ac.id/" class="btn btn-primary header-btn text-uppercase">Layanan VPN Kami</a>
                                </div>
                            </div>
                            <!-- end VPN Area -->
    
                            <!-- Start internet Area -->
                            <div class="cardano" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Akses Internet</h5>
                                  <p class="card-text">   UPT TIK Universitas Sriwijaya menyediakan layanan internet yang ada di seluruh fakultas/jurusan melalui jaringan WiFi yang tersebar di Universitas 
                                    Sriwijaya baik di Kampus Indralaya, Palembang, dan Kampus-Kampus Satelit Unsri (FK Madang, Pascasarjana Padang Selasa, FP kampus Padang Selasa, 
                                    FKIP Kampus OGAN, FKIP Kampus KM.5) di Palembang.
                                 </p>
                                  <a href="http://openticket.tik.unsri.ac.id/" class="btn btn-primary header-btn text-uppercase" >Layanan Akses Internet Kami</a>
                                </div>
                            </div>
                            <!-- end internet Area -->
                            
                            <!-- Start hotsing Area -->
                            <div class="cardano" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Data Center dan Web Hosting</h5>
                                  <p class="card-text">  Universitas Sriwijaya menyediakan layanan data center untuk fakultas, jurusan, lembaga, dan unit kerja resmi agar dapat menitipkan server mereka ke 
                                    data center unsri. <br>
                                    Layanan web hosting disediakan bagi fakultas, jurusan, lembaga, unit kerja, dosen, ormawa resmi kampus yang mempublikasikan 
                                    informasinya/penelitian/ejournal masing - masing ke internet dengan domail (namadomain).unsri.ac.id. Unsri menyediakan server virtual server 
                                    dengan spesifikasi 4 Core Prosesor, 8GB Ram, dan 50GB HDD.
                                 </p>
                                  <a href="http://openticket.tik.unsri.ac.id/" class="btn btn-primary header-btn text-uppercase" >Layanan Hosting Kami</a>
                                </div>
                            </div>
                            <!-- end hotsing Area -->
    
                            <!-- Start data dan pemprograman Area -->
                            <div class="cardano" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Pendataan dan Pemprograman</h5>
                                  <p class="card-text"> UPT TIK Universitas Sriwijaya juga melayani sivitas (fakultas, lembaga, dan Unit Kerja) di unsri dalam hal pendataan dan pemprograman.
                                 </p>
                                  <a href="http://openticket.tik.unsri.ac.id/" class="btn btn-primary header-btn text-uppercase" >Layanan Pendataan dan Pemprograman Kami</a>
                                </div>
                            </div>
                            <!-- End data dan pemprograman Area -->
                            
                            <!-- Start multimedia Area -->
                                 <!-- Start data dan pemprograman Area -->
                                 <div class="cardano" style="width: 18rem;">
                                    <div class="card-body">
                                      <h5 class="card-title">Multimedia</h5>
                                      <p class="card-text"> UPT TIK Universitas Sriwijaya melayani sivitas (fakultas, lembaga, dan Unit Kerja) di unsri dalam hal Multimedia seperti pelaksanaan broadcasting, 
                                        pelaksanaan video conference, pembuatan komten multimedia, pembuatan konten desain grafis.
                                     </p>
                                      <a href="http://openticket.tik.unsri.ac.id/" class="btn btn-primary header-btn text-uppercase" >Layanan Multimedia Kami</a>
                                    </div>
                                </div>
                            <!-- End multimedia Area -->
                        </div>
                    </div>	
                </main6>
                <!-- End service Area -->
    
                <section class="section-gap"></section>
                
                <!-- Start struktur Area -->
                <main7>
                    <div class="container" id="struktur">
            
                        <div class="image-section">
                            <img src="{{ asset('images/struktur organisasi.jpg') }}" alt="struktur tik">
                        </div>
            
                        <div class="text-section">
                            <h1>Struktur Organisasi</h1>
                            <p>Berdasarkan Peraturan Menteri Riset, Teknologi dan Pendidikan Tinggi Nomor 12 Tahun 2015 tentang Organisasi dan Tata Kerja Universitas Sriwijaya, semula UPT Pusat Komputer (UPT Puskom) Universitas Sriwijaya berubah menjadi UPT Teknologi Informasi dan Komunikasi (UPT TIK) Universitas Sriwijaya, sebagaimana yang tertera pada Pada pasal 114 struktur organisasi UPT TIK, terdiri dari: Kepala, Subagian Tata Usaha, Kelompok Jabatan Fungsional
                            </p>
                            <a href="/laman-misi-kami" class="contact-button">Selengkapnya -></a>
                        </div>
                    </div>
                </main7>
                <!-- End struktur Area -->			
                
    
                <!-- Start sdm Area -->
                <main8>
                    <div class="container" id="sdm">
                      
                        <div class="text-section">
                            <h1>Sumber Daya Manusia</h1>
                            <p>
                                Dalam melaksanakan tugas dan fungsinya, Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi (UPT TIK) Universitas Sriwijaya didukung oleh 16 orang pegawai yang terdiri dari tenaga pendidik dan tenaga kependidikan, dengan perincian sebagai berikut :
                                <br>
                                1.	Tenaga Pendidik dari Fakultas Teknik Unsri sebagai Kepala UPT TIK <br>
                                2.	Tenaga Kependidikan (1 Kasubbag, 1 BPP, dan 2 orang staf administrasi) <br>
                                3.	2 orang staf sebagai tenaga infrastruktur jaringan komputer <br>
                                4.	3 orang staf sebagai operator infrastruktur jaringan komputer <br>
                                5.	4 orang staf sebagai programer <br>
                                6.	2 orang staf sebagai teknisi <br>
                                </p>
                            <a href="/laman-visi-kami" class="contact-button">Selengkapnya -></a>
                        </div>
                          
                        <div class="image-section">
                            <img src="{{ asset('images/SDM.jpg') }}" alt="sdm">
                        </div>
                    </div>
                </main8>
                <!-- End sdm Area -->
    
                <!-- start berita Area -->		
                <main9 class="contact-area section-gap" id="berita">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="menu-content pb-30 col-lg-8">
                                <div class="title text-center">
                                    <h1 class="mb-10">BERITA TERKINI</h1>
                                    <p>Berita terkini terkait kegiatan UPT-TIK dan Info terkait UPT-TIK Universitas Sriwijaya</p>
                                </div>
                            </div>
                        </div>										
                    <div class="row-2">
                        
                    <div class="col-sm-6">
                            <div class="card-2">
                            <div class="card-body">
                                <h1 class="card-title">PERBAIKAN DAN MAINTENANCE JARINGAN SEGMENTASI 9</h1>
                                <br>
                                <img class="d-block mx-auto" src="images/maintenance kiri.png" alt="">
                                <br>
                                <p class="card-text" align="justify">sedang dilakukan perbaikan jaringan distribusi dari NOC (Network Operation Center) Universitas Sriwijaya yang bertempat di Gedung Student Center menuju ke wilayah segmentasi 9 Asrama Musi Rawas, Asrama OKU, dan Asrama OKI. Hal ini berdampak ke 3 asrama tersebut dikarenakan akan terjadi pemutusan koneksi sementara sampai pekerjaan perbaikan selesai.</p>
                                <br>
                                <p class="card-text">Mohon maaf untuk ketidaknyamannya</p>
                            </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="card-2">
                            <div class="card-body">
                                <h1 class="card-title">PERBAIKAN DAN MAINTENANCE JARINGAN LEVEL AKSES PALEMBANG DAN INDRALAYA</h1>
                                <br>
                                <img class="d-block mx-auto" src="images/maintenance kanan.png" alt="">
                                <br>
                                <p class="card-text" align="justify">sedang dilakukan perbaikan pada setiap wallmount jaringan level akses disetiap gedung dilingkungan Universitas Sriwijaya Kampus Palembang (Bukit Besar dan Extrasite(pasca sarjana, fakultas pertanian pada selasa, fkip ogan, fkip pgsd km.5, dan fk madang)) dan Kampus Indralaya. hal ini mengakibatkan putusnya koneksi disetiap gedung, dikarenakan adanya proses perawatan perangkat jaringan selama 15 s/d 30 menit.</p>
                                <br>
                                <p class="card-text">Mohon maaf untuk ketidaknyamannya</p>
                                </div>
                            </div>
                        </div>
                        </div>
                                                
                    </div>	
                </main9>
                <!--end berita Area -->
 
    
                <!-- start contact Area -->		
                <main10 class="contact-area section-gap" id="contact">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="menu-content pb-30 col-lg-8">
                                <div class="title text-center">
                                    <h1 class="mb-10">Hubungi Kami</h1>
                                    <p>Kami Selalu Berusaha untuk Selalu Menjadi yang Lebih Baik. Kritik, Saran, dan Masukan Anda Sangat Berpengaruh untuk Kami</p>
                                </div>
                            </div>
                        </div>										
                        <form class="form-area mt-60" id="myForm" action="mail.php" method="post" class="contact-form text-right">
                            <div class="row">	
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                            
                                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
    
                                <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                            </div>
                            <br>
                            <div class="lg-12 form-group">
                                <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                <button class="contact-button">Send Message<span class="lnr lnr-arrow-right"></span></button>
                                <div class="mt-10 alert-msg">								
                            </div>
                            </div>
                        </div>
                    </form>						
                        
                    </div>	
                </main10>
                <!--end contact Area -->
    
    
                <!-- start footer Area -->		
                <footer class="footer-area section-gap" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3  col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h4 class="text-white">Kantor Operasional Palembang</h4>
                                    <p style="color:white">
                                        Jln. Srijaya Negara, Kantor Pusat Administrasi Universitas Sriwijaya Kampus Palembang Lantai 3, Ruang Network Operation Center (NOC) Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi (UPT-TIK) Ilir Barat I, Kota Palembang, 30139
                                    </p>
                                    <a href="https://www.google.com/maps/place/Kantor+Pusat+Administrasi+Universitas+Sriwijaya+Kampus+Palembang/@-2.985431,104.7331093,18.75z/data=!4m5!3m4!1s0x2e3b75ed9c70e2fd:0xf9bb98f388ac9168!8m2!3d-2.9855561!4d104.732011" target="_blank" class="contact-button">HQ Palembang</a>
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1992.2016900094675!2d104.7331093!3d-2.985431!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75ed9c70e2fd%3A0xf9bb98f388ac9168!2sKantor%20Pusat%20Administrasi%20Universitas%20Sriwijaya%20Kampus%20Palembang!5e0!3m2!1sid!2sid!4v1636087780470!5m2!1sid!2sid" width="250" height="280" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h4 class="text-white">Kantor Operasional Indralaya</h4>
                                    <p style="color:white">
                                        Jl. Raya Palembang - Prabumulih Km. 32 Indralaya, Universitas SRiwijaya, Gedung Student Center Lantai 4, Ogan Ilir, Sumatera Selatan 30662
                                    </p>
                                    <a href="https://www.google.com/maps/place/Student+Center+of+Sriwijaya+University/@-3.219743,104.6559505,17z/data=!4m12!1m6!3m5!1s0x2e3bbdf41ccc272f:0x44c587e8be864639!2sMain+Campus+Unsri+Inderalaya!8m2!3d-3.2154422!4d104.6486978!3m4!1s0x2e3b75f3499dc461:0x48f97a46a3ccff93!8m2!3d-3.218925!4d104.6595501" target="_blank" class="contact-button">HQ Indralaya</a>
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3983.520272083449!2d104.6559505!3d-3.219743!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75f3499dc461%3A0x48f97a46a3ccff93!2sStudent%20Center%20Universitas%20Sriwijaya!5e0!3m2!1sid!2sid!4v1636087698381!5m2!1sid!2sid" width="250" height="280" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                                                                            
                        </div>
                    </div>
                </footer>	
                <!-- End footer Area -->

                <script src="{{ asset('js/slider.js') }}"></script>	
        </body>
</html>
