<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rimly Group Of Industries</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 <!-- Favicons -->
  <link href="@if(isset($websetup->icon)){{asset($websetup->icon)}}@endif" rel="icon">
  <link href="@if(isset($websetup->icon)){{asset($websetup->icon)}}@endif" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">

    #slider-section{
      margin-top:90px;
      padding: 0;
    }


    #slider-section img{
      max-height: 550px;
    }

    #hero{
      height: auto !important
    }


  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="@if(isset($websetup->icon)){{asset($websetup->icon)}}@endif" width="120" alt="">
        <!-- <span>Soft creation</span> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Services</a></li>
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="{{url('/')}}">Team</a></li>


          @if(isset($narbar))

            @foreach($narbar as $data)

              @if(App\Models\subnavbar::where("navbar_id", $data->id)->exists())
                  
                  <li class="dropdown"><a href="#"><span>{{$data->name}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      @foreach($data->subnavbar as $subnav)
                        <li><a href="{{$subnav->link}}">{{$subnav->name}}</a></li>
                      @endforeach
                    </ul>
                  </li>

                @else
                 <li><a class="nav-link scrollto" href="{{$data->link}}">{{$data->name}}</a></li>
              @endif

            @endforeach
            
          @endif



          




          <li><a class="nav-link scrollto" href="{{url('/')}}">Contact</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center text-center mt-5">
          @php
            echo $page->description;
          @endphp
        </div>

      </div>
    </div>

  </section><!-- End Hero -->






  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{url('/')}}" class="logo d-flex align-items-center">
              <img src="@if(isset($websetup->icon)){{asset($websetup->icon)}}@endif" width="120" alt="">
            </a>

            <p>@if(isset($websetup->description)){{$websetup->description}}@endif</p>

            <div class="social-links mt-3">
              <a target="_blank" href="@if(isset($websetup->fb)){{$websetup->fb}}@endif" class="twitter"><i class="bi bi-twitter"></i></a>
              <a target="_blank" href="@if(isset($websetup->tw)){{$websetup->tw}}@endif" class="facebook"><i class="bi bi-facebook"></i></a>
              <a target="_blank" href="@if(isset($websetup->ins)){{$websetup->ins}}@endif" class="instagram"><i class="bi bi-instagram"></i></a>
              <a target="_blank" href="@if(isset($websetup->ldin)){{$websetup->ldin}}@endif" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6 footer-links">
            <h4>Google map</h4>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.14275447265!2d89.9850758153248!3d23.99073558546863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe036cecc85593%3A0x361e586da8a6bfff!2sTara%20Mia%20Hen%20Store!5e0!3m2!1sbn!2sbd!4v1670312810293!5m2!1sbn!2sbd" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
          </div>


          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p><strong>Address:</strong> @if(isset($websetup->address)){{$websetup->address}}@endif
              <br>
              <strong>Phone:</strong> @if(isset($websetup->phone)){{$websetup->phone}}@endif<br>
              <strong>Email:</strong> @if(isset($websetup->email)){{$websetup->email}}@endif<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Soft Creation</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://softcreation.tech/">Soft Creation Limited</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>