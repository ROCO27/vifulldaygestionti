<!DOCTYPE html>
<html class="wide" lang="en">
  <head>
    <title>VI Full Day de Gestión de TI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Barlow%7CBarlow+Condensed:300,400,500,600,700,900">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/style.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{-- <script src="https://bl.ocks.org/sarahjsquire/raw/4706c4d48962e9962175/6ad2d061715fbc9f6de328ecb5ab5d3a6c1003d5/jquery.jSlots.js"></script>
<script src="/js/jquery.jSlots.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js"></script> --}}
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    @yield('styles')
</head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <div class="page">
      <!-- Section Header Default-->
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="76px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark" src="/images/logo-default.png" srcset="/images/logo-default@2x.png 2x" alt="VI Full Day de Gestión de TI"/><img class="brand-logo-light" src="/images/logo-inverse.png" srcset="/images/logo-inverse@2x.png 2x" alt="VI Full Day de Gestión de TI"/></a>
                  </div>
                </div>
                <!-- Rd Navbar Navigation-->
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">

                  </div>
                </div>
                <!-- RD Navbar Collapse-->
                <div class="rd-navbar-collapse"><a class="button button-primary" href="/regitroform" data-triangle=".button-overlay"><span>Participar</span><span class="button-overlay"></span></a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Section Swiper Slider-->
      @yield('SectionSwiperSlider')
      <!-- Section Book Your Ticket-->
      @yield('SectionBookYourTicket')
      <!-- Section Biggest 2021 Digital Conference-->
      @yield('SectionBiggest2021DigitalConference')
      <!-- Section Who Is Speaking-->
      @yield('SectionWhoIsSpeaking')
      <!-- Section Conference Schedule-->
      {{-- @yield('SectionConferenceSchedule') --}}
      <!-- Section Official Sponsors-->
      @yield('SectionOfficialSponsors')
      <!-- Section Register-->
      @yield('SectionRegisterForm')
      <!-- Section Pre Footer-->
      <section class="section section-lg bg-gray-900">
        <div class="container">
          <div class="row row-30">
            <div class="col-xs-10 col-lg-4 align-self-center"><a class="brand" href="/"><img class="brand-logo-light" src="/images/logo-inverse-big.png" srcset="/images/logo-inverse-big@2x.png 2x" alt="VI Full Day de Gestión de TI"></a></div>
            <div class="col-xs-10 col-sm-6 col-lg-4">
              <h5><span class="big font-weight-sbold">Detalle del evento</span></h5>
              <div class="event-detail">
                <p class="event-detail-time big">
                  <time data-splitting datetime="2019-01-05">Febrero 20, 2021</time>
                </p>
                <p class="event-detail-address big" data-splitting>Evento realizado por la Promoción XXI de la Escuela de Ingeniería de Sistemas de la UNT, via Zoom</p>
              </div>
            </div>
            <div class="col-xs-10 col-sm-6 col-lg-4">
              <h5><span class="big font-weight-sbold">Redes Sociales</span></h5>
              <div class="event-detail">
                <p class="big">Visita nuestras redes sociales,<br class="d-none d-xl-block"> para conocer nuestras ultimas novedades.
                </p>
                <ul class="list-inline list-inline-xs">
                  <li data-wow-delay=".2s"><a class="icon icon-rect icon-xs icon-white fa-facebook"  target="blank" href="https://www.facebook.com/VI-Full-Day-de-Gestion-de-TI-100634515326022" data-triangle=".icon-rect-overlay">
                      <div class="icon-rect-overlay"></div></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Divider-->
      <div class="divider divider-gray-900 text-center"></div>
      <!-- Footer Classic-->
      <footer class="section footer-classic context-dark">
        <div class="container">
          <p class="rights"><span>Copyright&nbsp;</span><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>by</span> <a href="#">Nortec</a>
          </p>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="block-with-svg-gradients">
      <svg xmlns="http://www.w3.org/2000/svg">
        <defs>
          <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#10266b ;stop-opacity:1"></stop>
            <stop offset="100%" style="stop-color:#008891;stop-opacity:1"></stop>
          </lineargradient>
        </defs>
      </svg>
    </div>

    <script src="/js/jquery.jSlots.js"></script>
    <script src="/js/core.min.js"></script>
    <script src="/js/script.js"></script>
    @yield('scripts')
  </body>
</html>
