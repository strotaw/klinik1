<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>{{ $title }} - KLINIK 11 SIJA 1</title>
  <meta name="description" content="Mexi Health & Medical Bootstrap 5 Template is a sophisticated website template for your hospital or clinic."/>

  <!--== Favicon ==-->
<link rel="shortcut icon" href="{{asset('fe/assets/img/favicon.ico')}}" type="image/x-icon" />

  <!--== Main Style CSS ==-->
  <link href="{{asset('fe/assets/css/style.css')}}" rel="stylesheet" />

</head>

<body>

  <!--wrapper start-->
  <div class="wrapper home-default-wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
      <div class="preloader">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area header-default {{ strtolower($title) == 'contact' ? 'header-style-two' : 'transparent sticky-header' }}">      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="header-align">
              <div class="header-logo-area">
                <a href="index.html">
                  <img class="logo-main" src="{{asset('fe/assets/img/logo.png')}}" alt="Logo" />
                  <img class="logo-light" src="{{asset('fe/assets/img/logo-light.png')}}" alt="Logo" />
                </a>
              </div>
              <div class="header-navigation-area">
                <ul class="main-menu nav justify-content-center">
                  <li><a href="{{route('home.index')}}">Home</a></li>
                  <li class="has-submenu"><a href="{{route('services.index')}}">Services</a>
                    <ul class="submenu-nav">
                      <li><a href="services.html">Services</a></li>
                      <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('about.index')}}">About</a></li>
                  <li><a href="{{route('contact.index')}}">Contact</a></li>
                </ul>
              </div>
              <div class="header-action-area">
                <div class="login-reg">
                  @if(session('user_id'))
                    <span>{{ session('user_name')}}</span>
                    <span>/</span>
                    <a href="{{ route('auth.logout') }}">Logout</a>
                  @else
                    <a href="{{ route('auth.index') }}">log in</a><span>/</span><a href="{{ route('auth.create') }}">register</a>
                  @endif
                  <i class="icon icofont-user-alt-3"></i>
                </div>
                <div class="widget-language">
                  <span class="current">Eng <i class="icon icofont-simple-down"></i></span>
                  <ul>
                    <li><a href="#">Ban</a></li>
                    <li><a href="#">Ger</a></li>
                  </ul>
                </div>
                <button class="btn-menu d-lg-none">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--== End Header Wrapper ==-->

    <main class="main-content site-wrapper-reveal">
@if ($title=='Home')
@yield('hero')
@yield('appointment')
@yield('feature')
@yield('team')
@yield('testimonial')
@yield('pricing')
@yield('map')
 
@elseif ($title=='Services')
@yield('page_title_service')
@yield('service')
@yield('testimonial')
@yield('pricing')
@yield('divider')

@elseif ($title=='About')
@yield('page_title_about')
@yield('about')

@elseif ($title=='Contact')
@yield('map')
@yield('contact')
@endif
 
    </main>

<!--== Start Footer Area Wrapper ==-->
<footer class="footer-area reveal-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
            <div class="widget-item">
              <div class="about-widget">
                <a class="footer-logo" href="index.html">
                  <img src="{{asset('fe/assets/img/logo.png')}}" alt="Logo">
                </a>
                <p class="mb-0">Sed elit quam, iaculis sed semper sit amet udin vitae nibh at magna akal semperFusce.
                </p>
                <ul class="widget-contact-info">
                  <li class="info-address"><i class="icofont-location-pin"></i>69 Halsey St, New York, Ny 10002, United
                    States.</li>
                  <li class="info-mail"><i class="icofont-email"></i><a
                      href="mailto://hello@yourdomain.com">hello@yourdomain.com</a></li>
                  <li class="info-phone"><i class="icofont-ui-call"></i><a href="tel://(0091) 8547 632521">(0091) 8547
                      632521</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 offset-md-1 col-lg-3 offset-lg-0 col-xl-3 d-lg-none d-xl-block">
            <div class="widget-item d-inline-block">
              <h4 class="widget-title line-bottom">Popular Tags</h4>
              <div class="widget-tags">
                <ul>
                  <li><a href="#/">Amazing</a></li>
                  <li><a href="#/">Envato</a></li>
                  <li><a href="#/">Themes</a></li>
                  <li><a href="#/">Clean</a></li>
                  <li><a href="#/">Wordpress</a></li>
                  <li><a href="#/">Creative</a></li>
                  <li><a href="#/">Mutilpurpose</a></li>
                  <li><a href="#/">Retina Ready</a></li>
                  <li><a href="#/">Twitter</a></li>
                  <li><a href="#/">Responsive</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
            <div class="widget-item">
              <h4 class="widget-title line-bottom">Recent Posts</h4>
              <nav class="widget-posts">
                <ul class="posts-item">
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Lorem Ispum dolor sit
                      amet putilor</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Medical is all about
                      quality.</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Is your website user
                      friendly ?</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Ai offer weekly
                      updates & more.</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Customer should love
                      your web.</a></li>
                  <li><a href="blog-details.html"><i class="icon icofont-rounded-double-right"></i>Your site smooth and
                      stunning.</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 offset-md-1 col-lg-4 offset-lg-0 col-xl-3">
            <div class="widget-item">
              <h4 class="widget-title line-bottom">Newsletter</h4>
              <div class="widget-newsletter">
                <p>Sign up for our mailing list to get latest updates and offers.</p>
                <form class="newsletter-form input-btn-group">
                  <input class="form-control" type="text" placeholder="Enter your email">
                  <button class="btn btn-theme" type="button"><i class="icofont-long-arrow-right"></i></button>
                </form>
              </div>
              <div class="widget-social-icons">
                <a href="#"><i class="icofont-twitter"></i></a>
                <a href="#"><i class="icofont-google-plus"></i></a>
                <a href="#"><i class="icofont-pinterest"></i></a>
                <a href="#"><i class="icofont-rss"></i></a>
                <a href="#"><i class="icofont-facebook"></i></a>
                <a href="#"><i class="icofont-dribbble"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row text-center">
            <div class="col-sm-12">
              <div class="widget-copyright">
                <p>© 2021 <span>MEXI</span>. Made with <i class="icofont-heart-alt"></i> by <a target="_blank"
                    href="https://www.hasthemes.com">HasThemes</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

    <!--== Start Side Menu ==-->
    <aside class="off-canvas-wrapper">
      <div class="off-canvas-inner">
        <div class="off-canvas-overlay"></div>
        <!-- Start Off Canvas Content Wrapper -->
        <div class="off-canvas-content">
          <!-- Off Canvas Header -->
          <div class="off-canvas-header">
            <div class="logo-area">
              <a href="index.html"><img src="{{asset('fe/assets/img/logo.png')}}" alt="Logo" /></a>
            </div>
            <div class="close-action">
              <button class="btn-close"><i class="lnr lnr-cross"></i></button>
            </div>
          </div>

          <div class="off-canvas-item">
            <!-- Start Mobile Menu Wrapper -->
            <div class="res-mobile-menu">
              <!-- Note Content Auto Generate By Jquery From Main Menu -->
            </div>
            <!-- End Mobile Menu Wrapper -->
          </div>
          <!-- Off Canvas Footer -->
          <div class="off-canvas-footer"></div>
        </div>
        <!-- End Off Canvas Content Wrapper -->
      </div>
    </aside>
    <!--== End Side Menu ==-->
  </div>

  <!--=======================Javascript============================-->

  <!--=== Modernizr Min Js ===-->
  <script src="{{asset('fe/assets/js/modernizr.js')}}"></script>
  <!--=== jQuery Min Js ===-->
  <script src="{{asset('fe/assets/js/jquery-main.js')}}"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="{{asset('fe/assets/js/jquery-migrate.js')}}"></script>
  <!--=== Popper Min Js ===-->
  <script src="{{asset('fe/assets/js/popper.min.js')}}"></script>
  <!--=== Bootstrap Min Js ===-->
  <script src="{{asset('fe/assets/js/bootstrap.min.js')}}"></script>
  <!--=== jquery UI Min Js ===-->
  <script src="{{asset('fe/assets/js/jquery-ui.min.js')}}"></script>
  <!--=== Plugin Collection Js ===-->
  <script src="{{asset('fe/assets/js/plugincollection.js')}}"></script>


  <!--=== Custom Js ===-->
  <script src="{{asset('fe/assets/js/custom.js')}}"></script>

</body>

</html>