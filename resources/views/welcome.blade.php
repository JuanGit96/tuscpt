@extends('layouts.general')
@section('metadescription')
<title>Tus Cajas Para Trasteos - Kits de cajas de cartón</title>
<meta name="description" content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Kits de cajas de cartón. Contáctanos al  305 367 8619">
  <meta property="og:url"           content="http://www.tuscajasparatrasteos.com" />
  <meta property="og:type"          content="website" />
  <meta property="og:description"   content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Contáctanos al  305 367 8619" />
  <meta property="og:image"         content="{{asset('img/O6PG550.jpg')}}" />
@endsection
@section('content')
<div id="contenido" style ="position: relative;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <!-- <div class="item "> -->
        <!-- <div  id="bannermove"  class="banner contenedor-div hidden-xs">
            <div class="col-md-12">
                <div class="col-md-6"></div>
                <div class="parrafomove col-xs-6 col-md-5">
                    <h1 align="right">Tenemos un nuevo aliado<br>que hace<b> todo por ti</b></h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-5"></div>
                <div class="titlemove col-md-7" >
                    <img src="{{asset('img/logomove.png')}}" alt="logo-move" width="30%">
                </div>
            </div>
            <div class="col-md-12">
                <div align="center">
                    <a class="btn" href="http://www.moveday.co/"> <b>Cotiza tu trasteo aquí</b> </a>
                </div>
            </div>
        </div> -->
      <!-- </div> -->
      <div class="item active">
        <div id="banner"  class="bannerImg banner contenedor-div hidden-xs">
            <img alt="sello contra entrega caja de carton" src="{{asset('img/sello.png')}}" class="sello-img img-responsive">
            <div class="consulta-pedido">
                <h1>
                    <div class="garantia">
                        <span class="italic">
                            Te garantizamos que:
                        </span>
                    </div>
                    <div class="sms">
                        <span class="uppercase">
                            Si las cajas <br>
                            no te alcanzan. <br>
                        </span>
                        <span class="italic">Te enviamos las que faltan,
                            <br>según el kit seleccionado. </span>
                    </div>
                </h1>
                <a href="{{url('/pedido')}}">Consulta el estado de tu pedido</a>
            </div>
        <div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 hidden-xs" id="box-kit-general" align="center">
      <div class="col-xs-6 home-general">
          <div class="col-xs-12 title">
              Kits de viviendas
          </div>
          <div class="col-xs-12 content-general">
                  <div class="price">
                      PRECIO
                  </div>
              <div class="col-xs-12 content-wt">
                  <div class="col-xs-8">
                      <div class="content" align="left">
                          <ul>
                              <li><strong>cajas de cartón</strong></li>
                              <li><strong>cajas de cartón</strong></li>
                              <li><strong>cajas en bogotá</strong></li>
                              <li><strong>cajas en bogota</strong></li>
                              <li><strong>cajas para empacar</strong></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xs-4 metros">
                      <div>
                          <p>Viviendas hasta</p>
                          <div class="metros-number">
                              <span>METROSm&sup2</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="home-sel col-xs-12">
              <a href="{{url('/kit-apartaestudios')}}">
                  <div class="home-1 col-xs-4 home-div" data-nombre="Apartaestudio">
                      Apartaestudio
                  </div>
              </a>
              <a href="{{url('/kit-apartamentos')}}">
                  <div class="home-2 col-xs-4 home-div" data-nombre="Apartamento">
                      Apartamento
                  </div>
              </a>
              <a href="{{url('/kit-casas')}}">
                  <div class="home-3 col-xs-4 home-div" data-nombre="Casa">
                      Casa
                  </div>
              </a>
          </div>
      </div>
      <div class="col-xs-6  col-xs-offset-6 office-general">
          <div class="col-xs-12 title">
              {{--Kits de oficinas--}}Arma tu kit
          </div>
          <div class="col-xs-12 content-general">
                  <div class="price">
                      PRECIO
                  </div>
              <div class="col-xs-12 content-wt">
                  <div class="col-xs-8">
                      <div class="content" align="left">
                          <ul>
                              <li><strong>cajas para mudanzas</strong></li>
                              <li><strong>cajas a domicilio</strong></li>
                              <li><strong>cajas de cartón</strong></li>
                              <li><strong>cajas de mudanza</strong></li>
                              <li><strong>cajas para trasteos</strong></li>
                              <li><strong>cajas para trasteos</strong></li>
                              <li><strong>cajas para trasteos</strong></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xs-4 metros">
                      <div>
                          <p>Oficinas hasta</p>
                          <div class="metros-number">
                              <span>METROSm&sup2</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="home-sel col-xs-12">
              {{--<a href="{{url('/kit-pequena')}}">--}}
                  {{--<div class="home-1 col-xs-4 home-div" data-nombre="Pequeña">--}}
                      {{--Pequeña--}}
                  {{--</div>--}}
              {{--</a>--}}
              <a href="{{--url('/kit-mediana')--}}{{url('arma-tu-kit')}}">
                  <div class="home-2 col-xs-12 home-div" data-nombre="+ VER MÁS">
                      + VER MÁS
                  </div>
              </a>
              {{--<a href="{{url('/kit-grande')}}">--}}
                  {{--<div class="home-3 col-xs-4 home-div" data-nombre="Grande">--}}
                      {{--Grande--}}
                  {{--</div>--}}
              {{--</a>--}}
          </div>
      </div>
  </div>
</div>
    
<section id="resp-banner-garantia" class="visible-xs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <p>
                    Te garantizamos que:
                    si las cajas no te alcanzan.
                    <span class="italic">Te enviamos las que faltan,
                        <br>según el kit seleccionado. </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid visible-xs" id="resp-banner">
    <div class="row">
        <div class="col-md-12">
            <div class="row banner-gen" id="banner-1">
                <div>
                    <div>
                        {{-- <h2><span>kits de vivienda</span></h2> --}}
                        <img src="./img/texto-vivienda.png" alt="casas cajas para trasteos" width="250px">
                    </div>
                </div>
            </div>
            <div class="row banner-gen" id="banner-2">
                <div>
                    <div>
                        {{-- <h2><span>kits de oficinas</span></h2> --}}
                        <img src="./img/ARMA-TU-KIT-.png" alt="arma tu kit cajas para trasteos" width="250px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id ="resp-sello" class="visible-xs">
    <div class="container-fluid">
        <div class="row" align="center">
            <img src="{{asset('img/sello.png')}}" class="sello-img img-responsive" width="50%" alt="sello garantía cajas de cartón">
        </div>
    </div>
</section>
<section class="kits-acordeon">
    <div class="panel-group visible-xs" id="panel-responsive">
        <div class="panel panel-default">
            <div class="panel-heading title-1">
                 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-responsive" href="#panel-element-1">
                     <div width="100%" id="viviendas">
                        KIT PARA VIVIENDAS
                    </div>
                </a>
            </div>
            <div id="panel-element-1" class="panel-collapse collapse in">
                <div class="panel-body panel-body1">
                    <div class="panel-group" id="panel-int1">
                        <div class="panel panel-default">
                            <div class="panel-heading title-1-1" >
                                <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-int1" href="#panel-element-1-1" >
                                    <div width="100%" id="item-1-1">
                                        Apartaestudio
                                    </div>
                                </a>
                                <div class="responsive-metros">
                                    <span>Hasta <strong>50m&sup2</strong></span>
                                </div>
                            </div>
                            <div id="panel-element-1-1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div>
                                        <ul>
                                            <li><strong>12</strong> Cajas de cartón </li>
                                            <li><strong>1</strong> Cinta industrial</li>
                                            <li><strong>8</strong> Metros de plástico de burbuja</li>
                                            <li><strong>4</strong> Bolsas industriales</li>
                                            <li><strong>1</strong> Marcador</li>
                                        </ul>
                                        <a href="{{url('/kit-apartaestudios')}}">
                                            <button><strong> $144.000 </strong><br>¡Comprar!</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading title-1-2">
                                 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-int1" href="#panel-element-1-2">
                                     <div width="100%">
                                        Apartamento
                                    </div>
                                 </a>
                                 <div class="responsive-metros">
                                    <span>Hasta <strong>140m&sup2</strong></span>
                                </div>
                            </div>
                            <div id="panel-element-1-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div>
                                        <ul>
                                            <li><strong>18</strong> Cajas de cartón </li>
                                            <li><strong>1</strong> Cinta industrial</li>
                                            <li><strong>15</strong> Metros de plástico de burbuja</li>
                                            <li><strong>8</strong> Bolsas industriales</li>
                                            <li><strong>1</strong> Marcador</li>
                                        </ul>
                                        <a href="{{url('/kit-apartamentos')}}">
                                            <button><strong> $206.000 </strong><br>¡Comprar!</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading title-1-3">
                                 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-int1" href="#panel-element-1-3">
                                     <div width="100%">
                                        Casa
                                    </div>
                                 </a>
                                 <div class="responsive-metros">
                                    <span>Hasta <strong>300m&sup2</strong></span>
                                </div>
                            </div>
                            <div id="panel-element-1-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div>
                                        <ul>
                                            <li><strong>34</strong> Cajas de cartón </li>
                                            <li><strong>1</strong> Cinta industrial</li>
                                            <li><strong>30</strong> Metros de plástico de burbuja</li>
                                            <li><strong>12</strong> Bolsas industriales</li>
                                            <li><strong>1</strong> Marcador</li>
                                        </ul>
                                        <a href="{{url('/kit-casas')}}">
                                            <button><strong> $315.000 </strong><br>¡Comprar!</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <a href="arma-tu-kit">
                <div class="panel-heading title-2">
                    {{--<a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-responsive" href="{{--#panel-element-2">--}}
                    <div width="100%" id="oficinas">
                        ARMA TU KIT
                    </div>
                    {{--</a>--}}
                </div>
            </a>
            {{--<div id="panel-element-2" class="panel-collapse collapse">
                <div class="panel-body panel-body2">
                    <div class="panel-group" id="panel-int2">
                        <div class="panel panel-default">
                            <div class="panel-heading title-2-1">
                                 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-int2" href="#panel-element-2-1" >
                                    <div width="100%" id="item-2-1">
                                        Pequeña
                                    </div>
                                 </a>
                                 <div class="responsive-metros">
                                    <span>Hasta <strong>150m&sup2</strong></span>
                                </div>
                            </div>
                            <div id="panel-element-2-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div>
                                        {{--<ul>
                                            <li><strong>20</strong> Cajas de cartón </li>
                                            <li><strong>12</strong> Cajas de cartón grandes</li>
                                            <li><strong>2</strong> Cinta industrial</li>
                                            <li><strong>6</strong> Metros de plástico de burbuja</li>
                                            <li><strong>2</strong> Bisturís industriales</li>
                                            <li><strong>2</strong> Marcadores</li>
                                        </ul>--}}
                                       {{-- <a href="{{url('/kit-pequena')}}">
                                            <button><strong>$262.990</strong><br>¡Comprar!</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading title-2-2">
                                 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-int2" href="#panel-element-2-2">
                                    <div width="100%">
                                        Mediana
                                    </div>
                                 </a>
                                 <div class="responsive-metros">
                                    <span>Hasta <strong>400m&sup2</strong></span>
                                </div>
                            </div>
                            <div id="panel-element-2-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div>
                                        <ul>
                                            <li><strong>40</strong> Cajas de cartón </li>
                                            <li><strong>24</strong> Cajas de cartón grandes</li>
                                            <li><strong>5</strong> Cinta industrial</li>
                                            <li><strong>1</strong> Dispensador de cinta</li>
                                            <li><strong>12</strong> Metros de plástico de burbuja</li>
                                            <li><strong>3</strong> Bisturís industriales</li>
                                            <li><strong>3</strong> Marcadores</li>
                                        </ul>
                                        <a href="{{url('/kit-mediana')}}">
                                            <button><strong>$540.260</strong><br>¡Comprar!</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading title-2-3">
                                 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-int2" href="#panel-element-2-3">
                                    <div width="100%">
                                        Grande
                                    </div>
                                 </a>
                                 <div class="responsive-metros">
                                    <span>Hasta <strong>800m&sup2</strong></span>
                                </div>
                            </div>
                            <div id="panel-element-2-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div>
                                        <ul>
                                            <li><strong>78</strong> Cajas de cartón </li>
                                            <li><strong>46</strong> Cajas de cartón grandes</li>
                                            <li><strong>9</strong> Cinta industrial</li>
                                            <li><strong>1</strong> Dispensador de cinta</li>
                                            <li><strong>24</strong> Metros de plástico de burbuja</li>
                                            <li><strong>7</strong> Bisturís industriales</li>
                                            <li><strong>7</strong> Marcadores</li>
                                        </ul>
                                        <a href="{{url('/kit-grande')}}">
                                            <button><strong>$1'195.550</strong><br>¡Comprar!</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
    {{-- FIN BOTONES KIT RESPONSIVE --}}
</section>
{{--Seccion de comentarios animados y dinamicos--}}
{{--<div id="steps" class="container-fluid">
    <div class="row row-1">
        <div class="col-xs-12 col-md-6 col-lg-5 img-div">
            <img class="img img-responsive hidden-xs hidden-sm" src="{{asset('img/hernando2.jpg')}}" alt="Cajas de cartón Andrés">
            <img class="img img-responsive visible-xs visible-sm" src="{{asset('img/hernando.jpg')}}" alt="Cajas de cartón Andrés Restrepo">
        </div>
        <div class="col-xs-12 col-md-6 col-lg-7">
            <div class="contenido contenido-1">
                <h3>Andrés Restrepo Jaramillo <br><span>(Buscaba cajas de cartón)</span></h3>
                <hr>
                <p>
                    "Pensé que el kit era caro y no veía sentido invertir tanto por cajas de cartón, fui a otro lugar a comprar muchos de los materiales que creía necesitar, a la hora de empacar el trasteo y me di cuenta que las cosas que compré no eran suficientes, el kit que me ofrecían tenía todo lo necesario y no creía."
                </p>
                <div class="close-phrase black">
                    <span>
                        "Gasté más en la calle creyendo que era más barato."
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-2">
        <div class="col-xs-12 col-md-push-6 col-md-6 col-lg-push-7 col-lg-5 img-div">
            <img class="img img-responsive hidden-xs hidden-sm" src="{{asset('img/juli2.jpg')}}" alt="Cajas de cartón Andrea">
            <img class="img img-responsive visible-xs visible-sm" src="{{asset('img/juli.jpg')}}" alt="Cajas de cartón Andrea Ríos">
        </div>
        <div class="col-xs-12 col-md-pull-6 col-md-6 col-lg-pull-5 col-lg-7">
            <div class="contenido contenido-2">
                <h3>Andrea Ríos villamil</h3>
                <hr>
                <p>
                    "Aunque al principio no creía, mi esposo me convenció y compré el kit de tus cajas para trasteo. Me hizo falta algunos metros de plástico burbuja, me comuniqué con ellos y de inmediato hicieron efectiva la garantía y me enviaron más plástico totalmente gratis. Las cajas de cartón son de muy buena calidad y del tamaño preciso."
                </p>
                <div class="close-phrase">
                    <span>
                        "Me faltaron cosas y me las enviaron gratis."
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<section class="container-fluid" id="noticias">
    <div class="row">
        <div class="col-xs-12">
            <a href="{{url('/noticias')}}"><h2 align="center">Noticias de interés</h2></a>
            @foreach(App\articles::where("state", "=", "act")->take('3')->orderBy('id','DESC')->get() as $articles)
                <div class="col-xs-12 col-sm-4 kit-content">
                    <div class="kit-lienzo">
                        <div class="kit-img">
                            <img src="{{asset('img/')}}/{{$articles->picture}}" alt="{!!$articles->title!!}" class="img img-reponsive" >
                        </div>
                        <div class="kit-title">
                            <h3>{!!$articles->title!!}</h3>
                        </div>
                        <p>
                            {!!str_limit($articles->description, 100)!!}
                        </p>
                        <div>
                            <a href="{{route('articles.show', $articles->id) }}">Seguir leyendo</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <!-- <div class="aliados col-xs-12 col-sm-12 col-md-12 col-lg-12 " align="center">
            <h2 style="color: #888; font-size: 26px; text-align: center;">Nuestros aliados</h2>
            <a href='https://liftit.co' target='_blank'>
                <img src="{{asset('img/aliados.png')}}" alt="aliado liftit"/>
            </a>
       </div> -->
    </div>
</section>
@endsection

