<!DOCTYPE html>
<html lang="es">
<head>
  {{-- META DESCRIPCIÓN --}}
  @yield('metadescription')
  {{-- FIN META DESCRIPCIÓN --}}

  <link rel="alternate" href="http://http://tuscajasparatrasteos.com/es-co" hreflang="es-co" />
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPGGBGT');</script>
<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1851962691683195'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1851962691683195&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
{{--
<base href="http://localhost/tuscajas/public/" /> --}}
<meta name="google-site-verification" content="H7bh2DkfpOWBmq-1RnCvB_OAfmdPSxm3xntl694ILyA" />

<meta http-equiv="Content-Type" content="text/html, charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link href="{{asset('css/main.css')}}" rel="stylesheet" type='text/css'> -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="shortcut icon" type="image/png" href="{{asset('img/favicon2.png')}}"/>
<link href="{{asset('fonts/HelveticaNeueLTCom-Cn.ttf')}}" rel="stylesheet" type='text/css'>

<script type="text/javascript" src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{asset('node_modules/sweetalert2/dist/sweetalert2.css')}}">
<link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">

<script type="text/javascript" src="{{asset('node_modules/sweetalert2/dist/sweetalert2.min.js')}}"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,900,900i" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
  <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
  <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
  <link rel="stylesheet" href="{{asset('node_modules/jquery-ui/jquery-ui.min.css')}}">
  <script src="{{asset('node_modules/jquery-ui/external/jquery/jquery.js')}}"></script>
  <script src="{{asset('node_modules/jquery-ui/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>

  <link rel="stylesheet" type="text/css" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.css')}}">
  <link href="{{asset('css/main_style.css')}}" rel="stylesheet" type='text/css'>
</head>
<body >
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPGGBGT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <a target="_blank" href="{{$whatsappLink}}" class="whatsapp-fijo">
        Escríbenos <br>
        <strong><i class="fa fa-whatsapp" aria-hidden="true"></i> 310 208 2969</strong>
    </a>
    <div id="header" >
      <nav class="navbar">

        <div class="container-fluid">
          <div class="navbar-header">
            <div>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
             <div class="lines-btn">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar top-bar"></span>
                  <span class="icon-bar middle-bar"></span>
                  <span class="icon-bar bottom-bar"></span>
                </div> 
                {{-- <div class="x-btn">
                  X
                </div>
 --}}              </button>
              <a href="./">
                <img src="{{asset('img/logo-solo.png')}}" class="img-responsive img img-solo" alt="Logo tus cajas para trasteos" rel="image_src"/>
                <img src="{{asset('img/logo-blanco.png')}}" class="img-responsive img img-blanco" alt="Logo tus cajas para trasteos blanco" rel="image_src"/>
              </a>
            </div>
          </div>
           <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" style="float: right;">
              <li id="header-inicio"><a href="{{url('/')}}">Inicio</a></li>
              <li id="header-kits" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kits <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('/kit-apartamentos')}}">Viviendas</a></li>
                  <li><a href="{{url('/arma-tu-kit')}}">Arma tu kit</a></li>
                </ul>
              </li>
              <li id="header-noticias"><a href="{{url('/noticias')}}">Noticias</a></li>
              <li id="header-contact"><a href="{{url('/contact')}}">Contáctanos</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>

    @yield('content')
      <footer>
        <div class="container-fluid">
          <div class="row">
            <div class="div-heart" align="center">

              <span style="color: #ec691c;"><i class="fa fa-heart" aria-hidden="true"></i></span>
              <p>Esta es una idea corazón naranja desarrollada por <a href="http://www.grimorum.com.co/" target="_blank" style="text-decoration: underline!important;">Grimorum</a></p>
              <img class="img img-reponsive" src="{{asset('img/cajas-footer.png')}}" alt="cajas de cartón footer">
            </div>
            <div class="col-xs-12 content-footer">
              <div class="col-xs-12 col-sm-4 promesa">
                <h3>Tus cajas para trasteos</h3>
                <p>Todo lo que necesitas para armar tu <br>trasteo a domicilio y a un solo click de distancia <br>
                  <strong><small><a href="{{asset('terminos/Términos%20y%20condiciones%20Tus%20cajas%20Clientes%20%20V2.pdf')}}" download="Términos y Condiciones">Términos y condiciones.</a></small></strong>
                </p>

              </div>
              <div class="col-xs-12 col-sm-4 contacto">
                <h3>Contáctanos</h3>

                <p>2369772 - 310 208 2969<br> Calle 97a No 9a – 34 Piso 5, Bogotá D.C.<br>  contacto@tuscajasparatrasteos.com</p>

              </div>
              <div class="col-xs-12 col-sm-4 social row">
                <h3>visita nuestras redes</h3>
                <ul>
                  <li><a href="https://www.facebook.com/tuscajasparatrasteos/" target="_blank" class="icon-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="https://twitter.com/Tus_Cajas" target="_blank" class="icon-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  {{--<li><a href="https://plus.google.com/109101829807148558929" target="_blank" class="icon-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>--}}
                  <li><a href="https://www.instagram.com/tus_cajas/?hl=es-la" target="_blank" class="icon-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
              </div>

              <div class="col-xs-12 reservados" align="center">
                <a href="http://www.grimorum.com.co/">
                  <p>© Grimorum 2017, Bogotá D.C., Colombia</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
  <div class="chat-box">
    <div class="fb-page"
       data-href="https://www.facebook.com/tuscajasparatrasteos/"
       data-tabs="messages"
       data-width="300"
       data-height="300"
       data-small-header="true">
      <div class="fb-xfbml-parse-ignore">
        <blockquote></blockquote>
      </div>
    </div>
    <i class="fa fa-times" aria-hidden="true"></i>
  </div>
  <div class="social-chat">
    <ul>
      <li class="icon-messenger visible-xs"><a><img src="{{asset('img/messenger-icon.png')}}" alt="messenger icono chat" width="52%" ></a></li>
      <li class="icon-messenger hidden-xs"><a data-toggle="tooltip" title="¡Chatea con nosotros!"><img src="{{asset('img/messenger-icon.png')}}" alt="messenger icono chat" width="52%"></a></li>
      <li class="visible-xs"><a href="whatsapp://send?text=Hola, tengo una duda.&phone=+573102082969"><img src="{{asset('img/whatsapp-icon.png')}}" alt="whatsapp icono" width="55%"></a></li>
    </ul>
  </div>
</body>
@yield('script')
</html>