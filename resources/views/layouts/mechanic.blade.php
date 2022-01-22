<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vehicle Home Solidarity</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v4.7.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html"></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang VHS</a></li>
          <li><a class="nav-link scrollto" href="#services">Tawarkan Jasa</a></li>
          <li><a class="nav-link scrollto" href="#team">Tim VHS</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li> 
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
          </form>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
         
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1 class="text-center">Vehicle Home Solidarity Services</h1>
      <h3 class="text-center fst-italic">Halo para montir, semoga hari anda menyenangkan</h3>
      <div class="row">
        <div class="col text-center">
          <a href="#services" class="btn-get-started scrollto">Tawarkan Jasa Anda!</a>
        </div>
      </div>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">
    
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col" data-aos="fade-left">
            <img src="assets/img/VHSLOGO.png" class="logo-vhs img-fluid" alt="">
          </div>
          <div class="col text-justify" data-aos="fade-right">
            <h3>Tentang VHS</h3>
            
            <p class="fst-italic">
              Vehicle Home Solidarity(VHS) merupakan aplikasi berbasis website yang dapat diakses melalui
               browser saat tersambung dengan jaringan internet atau intranet. VHS sendiri sebagai 
              pihak ketiga, memberikan fasilitas untuk menyediakan jasa layanan servis kendaraan untuk 
              pengguna kendaraan baik motor ataupun mobil tanpa harus pergi ke tempat layanan servis berada. 
              Selain itu juga memberikan fasilitas kepada para montir/penyedia jasa layanan servis untuk 
              menawarkan jasanya secara online.
            </p>
            <br>
            <div class="collaboration" data-aos="fade-up">
              <img src="assets/img/solid.png" class="logo-mesin" alt=""> <span class="collab">X</span>
              <img src="assets/img/piniks.png" class="logo-piniks" alt="">
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Jasa Servis</span>
          <h2>Jasa Servis</h2>
          <p>Silahkan pilih jasa servis yang ingin anda tawarkan</p>
        </div>

        <div class="row">
          <div class="col text-center" data-aos="zoom-in">
              <a href="{{ route('find-user') }}">
                <div class="icon-box">
                  <div class="icon">
                    <i class="bx bx-cycling"></i>
                  </div>
                  <h4><a href="">Motor</a></h4>
                </div>
                
              </a>  
          </div>
          <div class="col text-center" data-aos="zoom-in">
            <a href="{{ route('find-user') }}">
              <div class="icon-box">
                <div class="icon">
                  <i class="bx bxs-car-mechanic"></i>
                </div>
                <h4><a href="">Mobil</a></h4>
              </div>
            </a>
            
          </div>
        </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Tim VHS</span>
          <h2>Tim VHS</h2>
          <p>Berikut merupakan Tim VHS yang terdiri dari 6 orang</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/nessa.jpg" alt="">
              <h4>Vanessa Sheila Y </h4>
              <span>UI/UX Designer</span>
              <p>
                "You'll attract what you believe"
              </p>
              <div class="social">
                <a href="https://www.instagram.com/vanessashyv/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/vanessa-sheila-yovita-8a24aa208/" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/saraf.jpg" alt="">
              <h4>Sara Florensia T</h4>
              <span>Quality Assurance</span>
              <p>
                "Great things never came from comfort zones"
              </p>
              <div class="social">
                <a href="https://www.instagram.com/saraflo.t/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/saraflorensia/" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/pridya.jpg" alt="">
              <h4>Pridya Rahmayanti</h4>
              <span>UI/UX Designer</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href="https://www.instagram.com/prdyaaaaa/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/pridya-rahma-269931200/" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/haris.jpg" alt="">
              <h4>Haris Nur Kuncoro</h4>
              <span>Quality Assurance</span>
              <p>
                "Just follow your path"
              </p>
              <div class="social">
                <a href="https://www.instagram.com/haharis_/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/haris-nk-91b938182/" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/altha.jpg" alt="">
              <h4>Althadeno Aditya A</h4>
              <span>Back End Developer</span>
              <p>
                "Be yourself and never surrender"
              </p>
              <div class="social">
                <a href="https://www.instagram.com/althadeno/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/althadeno-aditya-21a007133/" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/dhuha1.jpg" alt="">
              <h4>M Dhuha Rohim</h4>
              <span>Fullstack Developer</span>
              <p>
                "Banyak omong, minim aksi"
              </p>
              <div class="social">
                <a href="https://www.instagram.com/cmd.exee/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/dhuha-rohim-643a8416a/" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Kontak</span>
          <h2>Kontak</h2>
          <p>Hubungi kami untuk informasi lebih lanjut!</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat kami</h3>
              <p>Universitas Pertamina, Jakarta Selatan </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>happyreading00@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Kontak</h3>
              <p>(+62) 82229011758</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=universitas%20pertamina&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google map for my website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            {{-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
          </div>

          <div class="col-lg-6">
            <form action="https://formspree.io/f/xlezenld" method="POST" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message">Pesan anda telah berhasil di kirim, terima kasih!</div>
                <div class="sent-message">Pesan anda telah berhasil di kirim, terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Vehicle Home Services</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://www.instagram.com/cmd.exee/" target="_blank">Kelompok 4</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>