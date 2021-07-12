<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pelazobit</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('logo.png')}}" rel="icon">
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('FlexStart/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('FlexStart/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="{{asset('FlexStart/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.1.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{asset('logo.png')}}" alt="">
        <span>Pelazobit</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#yyy">Why Choose Us</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
         
          <li class="dropdown"style="display:none;"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class="container mt-5 py-5">
    <div class="row justify-content-center">
        @if(session('error'))
          <div class="alert alert-danger text-center">
              <p>{{session('error')}}</p>
          </div>
        @endif 
        <div class="col-md-8">


            <div class="card">
                <div class="card-header text-center rounded py-2"style="color:white;font-weight:bold;background:#4154f1;font-family:Nunito,sans-serif;font-size:25px;">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <br>
                            <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="text-center py-3"><a href="{{route('registerpage')}}">Don't have an account ? Register Now</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
      <a href="/" class="logo d-flex align-items-center">
    <img src="{{asset('logo.png')}}" alt="">
    <span>Pelazobit</span>
  </a>
        <p>We are the most reliable crypto company that exchanges and trades bitcoin and gift cards. At Pelazobit, we are dedicated to giving you quality service with focus on; transparency, safe and secure trading platform, user-friendliness. </p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('FlexStart/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('FlexStart/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('FlexStart/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('FlexStart/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('FlexStart/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('FlexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('FlexStart/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('FlexStart/assets/js/main.js')}}"></script>

</body>

</html>