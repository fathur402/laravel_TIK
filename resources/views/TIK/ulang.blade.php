<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPT TIK Universitas Sriwijaya</title>
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
    {{-- javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- navbar --}}
    
    <nav class="navbar navbar-expand-sm bg-body-tertiary navbar-light bg-light ml-5">
        <div class="container-sm justify-content-end">
          <a class="navbar-brand m-5 ml-5 mt-0 mb-0" href="#home"><img src="{{ asset('images/logo tik.png') }}" alt="Logo UPT - TIK"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
   
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end nav-underline">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#home">BERANDA</a>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  TENTANG KAMI
                </a>
                <ul class="dropdown-menu nav-underline-blue">
                  <li><a class="dropdown-item" href="#tentang">Tentang Kami</a></li>
                  <li><a class="dropdown-item" href="#visi">Visi Kami</a></li>
                  <li><a class="dropdown-item" href="#misi">Misi kami</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#galeri">GALERI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#layanan">LAYANAN KAMI</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ORGANISASI
                </a>
                <ul class="dropdown-menu nav-underline">
                  <li><a class="dropdown-item" href="#struktur">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="#sdm">sumber Daya Manusia</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#berita">BERITA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">HUBUNGI KAMI</a>
              </li>
            </ul>
      
          </div>
        </div>
      </nav>

      {{-- start-banner-area --}}
     

    
    <section class="section-gap"></section>

    <section class="banner-area relative" id="home">
      <div class="container1">
            
      <div class="image-section">
          <img src="{{ asset('images/support center1.png') }}" alt="Person at desk">
      </div>
      <div class="text-section">
      <h4 class="text-uppercase">Unit Pelaksana Teknis</h4>
      <h1>
          Teknologi Informasi dan Komunikasi					
      </h1>
      <a href="#" target="_blank" class="primary-btn header-btn text-uppercase">ict@unsri.ac.id</a>
  </div>
  </section>
    {{-- end-banner-area --}}
    
    <section class="section-gap"></section>
    
    {{-- Start tentang Area --}}
    <section class="about-area" id="tentang">
        <div class="whole-wrap">
            <div class="container">
                <div class="container-fluid">
                  <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-12 info-left no-padding">
                            <img class="img-fluid" src="{{ asset('images/gambar tentang kami.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 info-right no-padding">
                            <h1>Tentang Kami</h1>
                            <p align="justify">UPT Teknologi Informasi dan Komunikasi Universitas Sriwijaya sebelumnya bernama UPT Pusat Komputer (Puskom) sesuai dengan Peraturan Menteri Riset, Teknologi dan Pendidkan Tinggi  Republik Indonesia nomor 12 tahun 2015 tentang Organisasi dan Tata Kerja Universitas Sriwijaya pasal 111 ayat 1. UPT Teknologi Informasi dan Komunikasi merupakan Unit Pelaksana Teknis (UPT) di bidang pengembangan dan pengelolaan teknologi informasi dan komunikasi serta pengelolaan sistem informasi. Pembangunan dan pengembangan layanan TIK dan pengelolaan SI terus dikembangkan untuk meningkatkan kepuasan pelayanan kepada sivitas akademika Universitas Sriwijaya, pembangunan dan pengembangan TIK dan Sistem Informasi oleh UPT TIK merupakan kerja sama bersama seluruh Fakultas, Jurusan/Program Studi, Biro, Lembaga UPT, dan unit-unit kerja yang berada dalam lingkungan Universitas Sriwijaya. UPT TIK sebagai unit pelaksana teknis berusaha memberikan layanan terbaik di bidang Teknologi Informasi dan Komunikasi dan Sistem Informasi untuk memenuhi kebutuhan-kebutuhan  universitas, sehingga pembangunan dan pengembangan dapat secara kontinyu dilakukan.</p>

                             {{--  Button trigger modal  --}}
                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                              Selengkapnya
                            </button>

                      {{--  Modal  --}}
                      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-scrollable">
                             {{--  Modal content --}}
                               <div class="modal-content">
                                 <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tentang UPT - TIK UNSRI</h1>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             {{--  form Modal content --}}
                                             <div class="modal-body">
                                              <p align="justify">Pembangunan, pengembangan, dan pemanfaatn Teknologi Informasi dan Komuniasi (TIK) dan Sistem Informasi (SI) Universitas Sriwijaya tidak dapat dipisahkan, untuk itu TIK dan SI perlu diselaraskan dengan sistem dan proses birokrasi yang ada.  Pembangunan dan pengembangan TIK dan SI Universitas Sriwjaya diarahkan untuk mendukung sistem dan bisnis proses yang berjalan, penyelarasan TIK dan SI dijalankan dengan mengidentifikasi kebutuhan sistem saat ini, kemudian merancang solusi-solusi berbasis TIK untuk memenuhi kebutuhan tersebut, perubahan proses-proses administratif tetap dapat dilakukan, tapi konteksnya adalah untuk keperluan tune-in atau fitting agar solusi berbasis TIK tersebut selaras dengan bisnis proses yang dapat memberikan dukungan maksimal terhadap eksekusi, sehingga diperoleh keuntungan berupa kecepatan, kemudahan, keluwesan, dan ketelitian dalam menjalankan bisnis proses tersebut. Dukungan maksimal bisa diwujudkan bila TIK benar-benar dikembangkan berdasarkan bisnis proses yang berlaku, dan kemudian dimanfaatkan sepenuhnya, dalam implementasinya, penyelarasan perlu melibatkan unit-unit kerja di domain yang berbeda.</p> 
                                              <br>
                                              <p align="justify">UPT Teknologi Informasi dan Komunikasi Universitas Sriwijaya sebelumnya bernama UPT Pusat Komputer (Puskom) sesuai dengan Peraturan Menteri Riset, Teknologi dan Pendidkan Tinggi  Republik Indonesia nomor 12 tahun 2015 tentang Organisasi dan Tata Kerja Universitas Sriwijaya pasal 111 ayat 1. UPT Teknologi Informasi dan Komunikasi merupakan Unit Pelaksana Teknis (UPT) di bidang pengembangan dan pengelolaan teknologi informasi dan komunikasi serta pengelolaan sistem informasi. Pembangunan dan pengembangan layanan TIK dan pengelolaan SI terus dikembangkan untuk meningkatkan kepuasan pelayanan kepada sivitas akademika Universitas Sriwijaya, pembangunan dan pengembangan TIK dan Sistem Informasi oleh UPT TIK merupakan kerja sama bersama seluruh Fakultas, Jurusan/Program Studi, Biro, Lembaga UPT, dan unit-unit kerja yang berada dalam lingkungan Universitas Sriwijaya. UPT TIK sebagai unit pelaksana teknis berusaha memberikan layanan terbaik di bidang Teknologi Informasi dan Komunikasi dan Sistem Informasi untuk memenuhi kebutuhan-kebutuhan  universitas, sehingga pembangunan dan pengembangan dapat secara kontinyu dilakukan.</p>

                                            </div>
                               {{--  end form Modal content --}}
                        <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                     </div>
                 </div>
                 {{--  end Modal content --}}
                </div>
              </div>						
                        
                        </div>						
                    </div>
                </div>
            </div>
        </div>	
        </section>
        {{--  End tentang Area  --}}

        <section class="section-gap"></section>

      {{--  Start visi Area  --}}
			<section class="about-area" id="visi">
                <div class="whole-wrap">
                    <div class="container">
                        <div class="container-fluid">                        
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-lg-6 col-md-12 info-left no-padding">
                                      
                                    <h1>
                                        Visi Kami
                                    </h1>
                                    <p align="justify">
                                    “Terselenggaranya sistem informasi yang terintegrasi dengan didukung oleh teknologi informasi dan komunikasi yang mutakhir untuk mewujudkan Universitas Sriwijaya yang terkemuka dan unggul di berbagai cabang ilmu, teknologi, dan seni”.
                                    </p>

                                      {{-- Button trigger modal --}}
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Selengkapnya
                                      </button>

                                {{-- Modal --}}
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-scrollable">
                                       {{-- Modal content --}}
                                         <div class="modal-content">
                                           <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Visi UPT - TIK UNSRI</h1>
                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                       </div>
                                                       {{-- form Modal content --}}
                                                       <div class="modal-body">
                                                       <p align="justify">“ terselenggaranya sistem informasi yang terintegrasi dengan didukung oleh teknologi informasi dan komunikasi yang mutakhir untuk mewujudkan Universitas Sriwijaya yang terkemuka dan unggul di berbagai cabang ilmu, teknologi, dan seni”.</p> 
                                                        <br>
                                                        <p align="justify">Visi tersebut mengandung beberapa kata kunci sebagai berikut :</p>
                                                        <br>
                                                        <p align="justify">1.	Sistem informasi yang terintegrasi. Berarti bahwa untuk mendukung berbagai kegiatan akademik dan non-akademik yang diselenggarakan oleh Universitas Sriwijaya diperlukan berbagai sistem informasi. Integrasi dari berbagai sistem informasi ini diperlukan agar data yang disimpan dan dikelola dapat konsisten dan integritasnya terjamin.</p>
                                                        <br>
                                                        <p align="justify">2.	Teknologi informasi dan komunikasi yang mutakhir. Kata kunci ini mengandung makna teknologi informasi dan komunikasi yang digunakan untuk mendukung sistem informasi yang terintegrasi harus memungkinkan akses informasi universitas dari mana saja dan kapan saja dengan perangkat yang selalu berkembang pesat.</p>
                                                        <br>
                                                        <p align="justify">3.	Universitas Sriwijaya yang terkemuka dan unggul mengandung makna bahwa sasaran dari pembangunan, pengembangan, dan implementasi TIK di Unsri adalah untuk mendukung terwujudnya Unsri sebagai universitas terkemuka yang berbasis riset dan unggul di berbagai cabang ilmu, teknologi, dan seni.</p>
                                                        
                                                      </div>
                                         {{-- end form Modal content --}}
                                  <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                               </div>
                           </div>
                           {{-- end Modal content --}}
                          </div>
                        </div>						
                      </div>
                                <div class="col-lg-6 info-right no-padding">
                                    <img class="img-fluid" src="{{ asset('images/gambar visi kami.jpg') }}" alt="">
                               
                                </div>						
                            </div>
                        </div>
                    </div>
                </div>	
                </section>
              {{-- End visi Area --}}

            <section class="section-gap"></section>

                {{-- Start misi Area --}}
			<section class="about-area" id="misi">
                <div class="whole-wrap">
                    <div class="container">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-end align-items-center">
                                <div class="col-lg-6 col-md-12 info-left no-padding">
                                    <img class="img-fluid" src="{{ asset('images/gambar misi kami.jpg') }}" alt="">
                                </div>
                                <div class="col-lg-6 info-left no-padding">
                                    <h1>Misi Kami</h1>
                                    <p>-. Terselenggaranya Sistem Infrastruktur Jaringan yang Mutakhir <br>
                                    -. Terselenggaranya Sistem Informasi yang Terintegrasi dan Mendukung "Index Kinerja Utama (IKU)" Universitas Sriwijaya<br>
                                    -. Terselenggaranya Pangkalan Data Universitas Sriwijaya yang Tersingkronisasi dengan Pangkalan Data DIKTI <br>
                                    -. Terselenggaranya Layanan TIK untuk Seluruh Stake Holder Lingkungan Universitas Sriwijaya dan Masyarakat Luas
                                    </p>

                              {{-- Button trigger modal --}}
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop0">
                                        Selengkapnya
                                      </button>

                                {{-- Modal --}}
                                <div class="modal fade" id="staticBackdrop0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-scrollable">
                                       {{-- Modal content --}}
                                         <div class="modal-content">
                                           <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Misi UPT - TIK UNSRI</h1>
                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                       </div>
                                                       {{-- form Modal content --}}
                                                       <div class="modal-body">
                                                        <p align="justify">“Pencapaian efisiensi, efektivitas, akuntabilitas, dan transparansi manajemen Universitas Sriwijaya dapat terlaksana dengan dukungan penerapan teknologi informasi yang terpadu.</p> 
                                                        <br>
                                                        <p align="justify">Untuk mendukung misi tersebut, maka misi TIK adalah sebagai berikut :</p>
                                                        <br>
                                                        <p align="justify">1.	Membangun, mengembangkan, dan mengimplementasikan sistem informasi yang terintegrasi dengan didukung oleh teknologi informasi dan komunikasi yang mutakhir untuk mendukung terlaksananya Tri Dharma Perguruan Tinggi di Unsri</p>
                                                        <br>
                                                        <p align="justify">2.	Meningkatkan efisiensi dan keefektifan administrasi pendidikan tinggi melalui implementasi sistem informasi yang terintegrasi</p>
                                                        <br>
                                                        <p align="justify">3.	Mengembangkan sistem tata kelola dan kemampuan SDM di bidang sistem informasi/teknologi informasi dan komunikasi</p>
                                                      </div>
                                          {{-- end form Modal content --}}
                                  <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                               </div>
                           </div>
                            {{-- end Modal content --}}
                          </div>
                        </div>		
                                          	</div>						
                            </div>
                        </div>
                    </div>
                </div>	
                </section>
                 {{-- End misi Area  --}}

            <section class="section-gap"></section>

                 {{-- Start Carousel Area  --}}
            <section class="about-area" id="galeri">
             <div class="whole-wrap">
                <div class="container">
                    <div class="container-fluid">
                            <h2>Galeri Kegiatan TIK</h2>
                        {{-- Indicators  --}}
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="7" aria-label="Slide 8"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="8" aria-label="Slide 9"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="9" aria-label="Slide 10"></button>
                      <button type="button" data-bs-target=#carouselExampleCaptions data-bs-slide-to="10" aria-label="Slide 11"></button>

                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('images/pimpinan tik.jpg') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Pimpinan UPT TIK</h5>
                          <p>Dipl-Ing. Ir. Amrifan Saladin Mohruni, Ph.D.</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/team programming tik.jpg') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Sub Koordinator TIK
                           </h5>
                          <p> Muhammad Rusli, M.Kom</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/teknisi infrastruktur tik.jpg') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Team Programing UPT TIK
                            </h5>
                          <p>(kiri -> kanan) Noordin As-Sidiq, Chandra Eko, dan Rian Fitra</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/administrasi umum.jfif') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Pengelola dan pengolah data
                          </h5>
                          <p>Dwi Rustanto<p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/pengelola barang tik.jfif') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Pengelola server dan jaringan
                           </h5>
                          <p>Sujianto</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/pengelola barang2 tik.jfif') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Pengelola server dan jaringan
                            </h5>
                          <p>Rudiansyah</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/pengelola dan pengolah data tik.jfif') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Teknisi infrastruktur dan jaringan
                            </h5>
                          <p>Putra Yudha Perdana</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/pengelola server tik.jfif') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Teknisi jaringan
                            </h5>
                          <p>Hendra Wijaya</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/sub koordinator tik.jfif') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>eknisi jaringan
                           
                            </h5>
                          <p>Aji Arlan</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/teknisi jaringan tik.jfif') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Pengelola barang persediaan T</h5>
                          <p>Komarudin</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/teknisi jaringan2 tik.jfif') }}" alt="Person at desk" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Administrasi Umum
                           </h5>
                          <p> Maryati</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target=#carouselExampleCaptions data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target=#carouselExampleCaptions data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <br>
    	{{--  End Carousel Area  --}}

        <section class="section-gap"></section>

        {{-- Start service Area  --}}
			<section class="service-area" id="layanan">	
        <div class="bg">
            <div class="whole-wrap">
                    <div class="container">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-end align-items-center">
					              <div class="row d-flex justify-content-center">
					        	<div class="col-md-8 pb-40 header-text">
							<h1>Layanan Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi</h1>
						</div>
					</div>
					<div class="container">
            <div class="row">
                {{-- Start email Area --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lnr lnr-user"></span> Email Bagi Civitas UNSRI</h4>
                            <p class="card-text" align="justify">
                                Email resmi UNSRI dengan alamat @unsri.ac.id disediakan bagi para dosen, staf, fakultas, jurusan, unit kerja dan lembaga resmi kampus lainnya.
                                Setiap mahasiswa UNSRI juga bisa menggunakan layanan email untuk mahasiswa. Akun email mahasiswa berupa @student.unsri.ac.id. Selain email,
                                UNSRI juga mefasilitasi email instansinya dengan google drive unlimited secara gratis.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('TIK.index') }}" target="_blank" class="btn btn-primary text-uppercase">Layanan Email Kami</a>
                        </div>
                    </div>
                </div>
                {{-- End email Area --}}
                
                {{-- Start VPN Area --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lnr lnr-license"></span> VPN UNSRI</h4>
                            <p class="card-text" align="justify">
                                UPT TIK Universitas Sriwijaya menyediakan layanan VPN bagi sivitas akademika UNSRI untuk dapat menggunakan beberapa aplikasi yang hanya diijinkan
                                diakses di dalam jaringan internal kampus. Layanan VPN yang tersedia di UNSRI adalah PPTP, L2TP dan OPEN VPN yang tersedia untuk Windows, Android, Mac dan iOS.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('TIK.index') }}" target="_blank" class="btn btn-primary text-uppercase">Layanan VPN Kami</a>
                        </div>
                    </div>
                </div>
                {{-- End VPN Area --}}
                
                {{-- Start internet Area --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lnr lnr-license"></span> Akses Internet</h4>
                            <p class="card-text" align="justify">
                                UPT TIK Universitas Sriwijaya menyediakan layanan internet di seluruh fakultas/jurusan melalui jaringan WiFi yang tersebar di Universitas Sriwijaya, baik di Kampus Indralaya, Palembang, dan Kampus-Kampus Satelit Unsri.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('TIK.index') }}" target="_blank" class="btn btn-primary text-uppercase">Layanan Akses Internet Kami</a>
                        </div>
                    </div>
                </div>
                {{-- End internet Area --}}
                
                {{-- Start hosting Area --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lnr lnr-phone"></span> Data Center dan Web Hosting</h4>
                            <p class="card-text" align="justify">
                                Universitas Sriwijaya menyediakan layanan data center untuk fakultas, jurusan, lembaga, dan unit kerja resmi agar dapat menitipkan server mereka ke data center unsri.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('TIK.index') }}" target="_blank" class="btn btn-primary text-uppercase">Layanan Hosting Kami</a>
                        </div>
                    </div>
                </div>
                {{-- End hosting Area --}}
                
                {{-- Start data dan pemprograman Area --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lnr lnr-bubble"></span> Pendataan dan Pemprograman</h4>
                            <p class="card-text" align="justify">
                                UPT TIK Universitas Sriwijaya juga melayani sivitas (fakultas, lembaga, dan Unit Kerja) di unsri dalam hal pendataan dan pemprograman.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('TIK.index') }}" target="_blank" class="btn btn-primary text-uppercase">Layanan Pendataan dan Pemprograman Kami</a>
                        </div>
                    </div>
                </div>
                {{-- End data dan pemprograman Area --}}
                
                {{-- Start multimedia Area --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lnr lnr-bubble"></span> Multimedia</h4>
                            <p class="card-text" align="justify">
                                UPT TIK Universitas Sriwijaya melayani sivitas (fakultas, lembaga, dan Unit Kerja) di UNSRI dalam hal Multimedia seperti pelaksanaan broadcasting, pelaksanaan video conference, pembuatan konten multimedia, pembuatan konten desain grafis.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('TIK.index') }}" target="_blank" class="btn btn-primary text-uppercase">Layanan Multimedia Kami</a>
                        </div>
                    </div>
                </div>
                {{-- End multimedia Area --}}
            </div>    

                  </div>
                 </div>   
              </div>
            </div>
      
			</section>
		   {{-- End service Area --}}

			<section class="section-gap"></section>
		
		   {{-- Start struktur Area --}}

			<section class="about-area" id="struktur">
			<div class="whole-wrap">
				<div class="container">
					<div class="container-fluid">
						<div class="row d-flex justify-content-end align-items-center">
							<div class="col-lg-6 col-md-12 info-left padding-top">
                     <img class="img-fluid" src="{{ asset('images/struktur organisasi.jpg') }}" alt="">
							</div>
							<div class="col-lg-6 info-right padding-top">
								<h1>Struktur Organisasi</h1>
								<p align="justify">Berdasarkan Peraturan Menteri Riset, Teknologi dan Pendidikan Tinggi Nomor 12 Tahun 2015 tentang Organisasi dan Tata Kerja Universitas Sriwijaya, semula UPT Pusat Komputer (UPT Puskom) Universitas Sriwijaya  berubah menjadi UPT Teknologi Informasi dan Komunikasi (UPT TIK) Universitas Sriwijaya, sebagaimana yang tertera pada Pada pasal 114 struktur organisasi UPT TIK, terdiri dari: Kepala, Subagian Tata Usaha, Kelompok Jabatan Fungsional</p>	
                  
                         {{-- Button trigger modaa --}}
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                          Selengkapnya
                        </button>

                   {{-- Modaa --}}
                  <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-scrollable">
                           {{-- Modal contea --}}
                           <div class="modal-content">
                             <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Struktur Organisasi UPT - TIK UNSRI</h1>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                           {{-- form Modal contea --}}
                                         <div class="modal-body">
                                          <img class="img-fluid" src="{{ asset('images/struktur organisasi.jpg') }}" alt="">
                                        </div>
                             {{-- end form Modal contea --}}
                    <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                 </div>
             </div>
               {{-- end Modal contea --}}
        
                  </div>						
						</div>
					</div>
				</div>
			</div>	
			</section>
		   {{-- End struktur Area			 --}}
			
            <section class="section-gap"></section>

               {{-- Start sdm Area --}}
			<section class="about-area" id="sdm">
                <div class="whole-wrap">
                    <div class="container">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-end align-items-center">
                                <div class="col-lg-6 col-md-12 info-left no-padding">
                                    <h1>
                                        Sumber Daya Manusia
                                    </h1>
                                    <p align="justify">
                                    Dalam melaksanakan tugas dan fungsinya, Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi (UPT TIK) Universitas Sriwijaya didukung oleh 16 orang pegawai yang terdiri dari tenaga pendidik dan tenaga kependidikan, dengan perincian sebagai berikut :
                                    <br>
                                    1.	Tenaga Pendidik dari Fakultas Teknik Unsri sebagai Kepala UPT TIK <br>
                                    2.	Tenaga Kependidikan (1 Kasubbag, 1 BPP, dan 2 orang staf administrasi) <br>
                                    3.	2 orang staf sebagai tenaga infrastruktur jaringan komputer <br>
                                    4.	3 orang staf sebagai operator infrastruktur jaringan komputer <br>
                                    5.	4 orang staf sebagai programer <br>
                                    6.	2 orang staf sebagai teknisi <br>
                                    </p>
    
                                       {{-- Button trigger modaa --}}
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                        Selengkapnya
                                      </button>

                                 {{-- Modaa --}}
                                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-scrollable">
                                         {{-- Modal contea --}}
                                         <div class="modal-content">
                                           <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Sumber Daya Manusia UPT - TIK UNSRI</h1>
                                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                       </div>
                                                         {{-- form Modal contea --}}
                                                       <div class="modal-body">
                                                        <p align="justify">“Pencapaian efisiensi, efektivitas, akuntabilitas, dan transparansi manajemen Universitas Sriwijaya dapat terlaksana dengan dukungan penerapan teknologi informasi yang terpadu.</p> 
                                                        <br>
                                                        <p align="justify">Untuk mendukung misi tersebut, maka misi TIK adalah sebagai berikut :</p>
                                                        <br>
                                                        <p align="justify">1.	Membangun, mengembangkan, dan mengimplementasikan sistem informasi yang terintegrasi dengan didukung oleh teknologi informasi dan komunikasi yang mutakhir untuk mendukung terlaksananya Tri Dharma Perguruan Tinggi di Unsri</p>
                                                        <br>
                                                        <p align="justify">2.	Meningkatkan efisiensi dan keefektifan administrasi pendidikan tinggi melalui implementasi sistem informasi yang terintegrasi</p>
                                                        <br>
                                                        <p align="justify">3.	Mengembangkan sistem tata kelola dan kemampuan SDM di bidang sistem informasi/teknologi informasi dan komunikasi</p>
                                                      </div>
                                           {{-- end form Modal contea --}}
                                  <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                               </div>
                           </div>
                             {{-- end Modal contea --}}
                          </div>
                        </div>	
                                   							
                                </div>
                                <div class="col-lg-6 info-right no-padding">
                                    <img src="{{ asset('images/SDM.jpg') }}" alt="sdm">
                                </div>						
                            </div>
                        </div>
                    </div>
                </div>	
                </section>
                 {{-- End sdm Area --}}
    
                <section class="section-gap"></section>

                 {{-- start berita Area		 --}}
                <section class="contact-area section-gap" id="berita">
                    <div class="container">
                        <div class="row d-flex justify-content-center ">
                            <div class="menu-content pb-30 col-lg-8">
                                <div class="title text-center">
                                    <h1 class="mb-10">BERITA TERKINI</h1>
                                    <p>Berita terkini terkait kegiatan UPT-TIK dan Info terkait UPT-TIK Universitas Sriwijaya</p>
                                </div>
                            </div>
                        </div>										
                    <div class="row">
                        
                    <div class="col-sm-6">
                            <div class="card">
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
                            <div class="card">
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
                </section>
                {{-- end berita Area --}}

                <section class="section-gap"></section>
        
                 {{-- start contact Area		 --}}
                <section class="contact-area section-gap" id="contact">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="menu-content pb-30 col-lg-8">
                                <div class="title text-center">
                                    <h1 class="padding-top">Hubungi Kami</h1>
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
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                                <div class="mt-10 alert-msg">								
                            </div>
                            </div></div>
                        </form>						
                        
                    </div>	
                </section>
                {{-- end contact Area --}}
    
                <section class="section-gap padding-top"></section>
                <hr>
                 {{-- start footer Area		 --}}
                <footer class="footer-area section-gap " id="contact">
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-3  col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h4 class="text-white">Kantor Operasional Palembang</h4>
                                    <p style="color:white">
                                        Jln. Srijaya Negara, Kantor Pusat Administrasi Universitas Sriwijaya Kampus Palembang Lantai 3, Ruang Network Operation Center (NOC) Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi (UPT-TIK) Ilir Barat I, Kota Palembang, 30139
                                    </p>
                                    <div class="card-footer text-center">                                      
                                      <a href="https://www.google.com/maps/place/Kantor+Pusat+Administrasi+Universitas+Sriwijaya+Kampus+Palembang/@-2.985431,104.7331093,18.75z/data=!4m5!3m4!1s0x2e3b75ed9c70e2fd:0xf9bb98f388ac9168!8m2!3d-2.9855561!4d104.732011" target="_blank" class="btn btn-primary text-uppercase">HQ Palembang</a>
                                  </div>
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
                                    <div class="card-footer text-center">
                                      <a href="https://www.google.com/maps/place/Student+Center+of+Sriwijaya+University/@-3.219743,104.6559505,17z/data=!4m12!1m6!3m5!1s0x2e3bbdf41ccc272f:0x44c587e8be864639!2sMain+Campus+Unsri+Inderalaya!8m2!3d-3.2154422!4d104.6486978!3m4!1s0x2e3b75f3499dc461:0x48f97a46a3ccff93!8m2!3d-3.218925!4d104.6595501" target="_blank" class="btn btn-primary text-uppercase">HQ Indralaya</a>
                                  </div>
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
                 {{-- End footer Area --}}

                <!-- Tambahkan JS Bootstrap Bundle (termasuk Popper.js) --> 
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script> 
                <!-- Tambahkan JS jQuery --> 
                <script src="https://code.jquery.com/jquery-3.5.1.min.js">
                </script>


                <script src="{{ asset('js/slider.js') }}"></script>	

</body>
</html>