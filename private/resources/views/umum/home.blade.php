<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Jaringan dokumentasi informasi hukum</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset ('public/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset ('public/plugins/slick/slick-theme.css') }}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{ asset ('public/plugins/fancybox/jquery.fancybox.min.css') }}">
  
  <!-- Stylesheets -->
  <link href="{{ asset ('public/css/style.css') }}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->


<!--Main Header-->
<nav class="navbar navbar-default fixed-top">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.html">Beranda</a>
                        </li>
                        <li>
                              <a href="about.html">Tentang kami</a>
                        </li>
                        <li>
                              <a href="service.html">Berita</a>
                        </li>
                        <li>
                              <a href="gallery.html">Galeri</a>
                        </li>
                        <li>
                              <a href="team.html">Produk Hukum</a>
                        </li>
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(public/img/pendopo.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2">Selamat Datang Di JDIH BREBES</h2><br>
                        <!-- <div class="col-md-8">
                                     <input type="text" name="name" class="form-control main" placeholder="Nama Produk" required>
                                    <button class="btn btn-style-one">Pencarian</button>
                                </div> -->
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(public/img/kantor.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-right">
                        <!-- <h2 class="text-white">We Care About <br>Your Health</h2>
                        <p class="tag-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <a href="#" class="btn btn-main btn-white">about us</a> -->
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/slider-bg-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style">
                        <!-- <h2 class="text-white text-bold mb-2">Best Medical Services</h2>
                        <p class="tag-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, 
                            <br>eius pariatur minus itaque nostrum.</p>
                        <a href="shop.html" class="btn btn-main btn-white">shop now</a> -->
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--====  End of Page Slider  ====-->


<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
        <h2 style="text-align:center">Tentang Kami</h2><br>
                    <!-- Nav tabs -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                        </ul>
                    </div>
                    <!--Start single tab content-->
                    <div class="tab-content">
                        <div class="service-box tab-pane fade in active row" id="dormitory">
                            <div class="col-md-6">
                                <h4>Visi</h4>
                                <p>“Menuju Brebes Unggul, Sejahtera dan Berkeadilan”</p>
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h4>Misi</h4>
                                    </div>
                                    <div class="text">
                                        <p>Memantapkan kesadaran dan partisipasi masyarakat dalam pembangunan guna menunjang percepatan revolusi mental yang berbasis nilai keagamaan yang toleran, budaya lokal dan supremasi hukum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                    </div>
                </div>
		</div>
	</div>
</section>
<!--End about section-->

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Berita
            </h3>
            <p>Untuk menampilkan kegiatan yang terbaru</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{asset ('public/img/b2.jpg')}}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>STBD Pansus</h4>
                        <p>Stbd pansus penyusunan perda perlindungan dan pengelolaan lingkungan hidup di kantor lingkungan hidup bandung .</p>
                        <a href="#" class="btn btn-main">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{asset ('public/img/b3.jpg')}}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Seminar dan Rapat Kordinasi DPRD Provinsi jawa Tengah</h4>
                        <p>Seminar dan rapat kordinasi DPRD Provinsi jawa Tengah, menggagas Raperda ttg Pemberdayaan dan Penguatan Lembaga Masyarakat Desa Hutan (LMDH).</p>
                        <a href="#" class="btn btn-main">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="{{asset ('public/img/b2.jpg')}}" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>STBD Pansus</h4>
                        <p>Stbd pansus penyusunan perda perlindungan dan pengelolaan lingkungan hidup di kantor lingkungan hidup bandung .</p>
                        <a href="#" class="btn btn-main">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End team section-->

<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Galeri
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
                fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{asset ('public/img/b2.jpg')}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Dormitory</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{asset ('public/img/b2.jpg')}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{asset ('public/img/b2.jpg')}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/1.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Dormitory</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Section-->



<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>Link</h3>
        </div>
        
   <a href="javascript:void(0)"><img src="{{asset ('public/img/link/BPHN-JDIH-Magelang.jpg')}}" alt=""></a>  
    <a href="javascript:void(0)"><img src="{{asset ('public/img/link/BPHN-JDIH-Magelang.jpg')}}" alt=""></a>  
    </div>
</section>
<!--End testimonial-section-->

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <!-- <img src="images/logo-2.png" alt=""> -->
                </a>
              </figure>
            </div>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p> Jl. P. Diponegoro No. 141 Kabupaten Brebes Provinsi Jawa Tengah </p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>jdih.brebeskab@gmail.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(0283) 353673</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2018. by
          <a href="javascript:void(0)">Jdih Brebes</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{ asset ('public/plugins/jquery.js') }}"></script>
<script src="{{ asset ('public/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset ('public/plugins/bootstrap-select.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset ('public/plugins/slick/slick.min.js') }}"></script>
<!-- FancyBox -->
<script src="{{ asset ('public/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js') }}"></script>

<script src="{{ asset ('public/plugins/validate.js') }}"></script>
<script src="{{ asset ('public/plugins/wow.js') }}"></script>
<script src="{{ asset ('plugins/jquery-ui.js') }}"></script>
<script src="{{ asset ('public/plugins/timePicker.js') }}"></script>
<script src="{{ asset ('public/js/script.js') }}"></script>
</body>

</html>

