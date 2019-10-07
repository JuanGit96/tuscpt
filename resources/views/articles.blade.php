@extends('layouts.general')

@section('metadescription')
  <title>{!!$articles->title!!} - Tus Cajas Para Trasteos</title>
  <meta name="description" content="Kits de cajas de cartón - {{str_limit($articles->description, 120)}}">
  <meta property="og:url"           content="{{route('articles.show', $articles->id) }}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{!!$articles->title!!} - Tus Cajas Para Trasteos" />
  <meta property="og:description"   content="{{str_limit($articles->description, 120)}}" />
  <meta property="og:image"         content="{{asset('img/')}}/{{$articles->picture}}" />
@endsection

@section('content')
<div class="container-fluid" id="noticia-gen">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-xs-12 col-sm-8" id="noticia-content">
          <h1>{!!$articles->title!!}</h1>
          <div>
            <img rel="image_src" class="img img-responsive" src="{{asset('img/')}}/{{$articles->picture}}" alt="{!!$articles->title!!}">
          </div>
          <p>{!!$articles->description!!}</p>
        </div>

        <div class="col-xs-12 col-sm-4">
          
          {{-- FORMULARIO DE DESCUENTO --}}

          {{-- <div class="col-xs-12" id="noticia-form">
            <div class="copy-desc">
              <div class="row">
                <div class="col number-desc">
                  <small>Planifica tu trasteo y gana el</small>
                  <span>-10%</span>
                </div>
                <div class="col content-desc">
                  <p><span>Tus cajas para trasteos</span> te regala el <span>10%</span> de descuento. <br><br>Registra tu posible fecha de mudanza y te enviamos un <span>código promocional</span>.</p>
                </div>
              </div>
            </div>
            <form role="form">
             <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="¿Cómo te llamas?" required/>
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="¿Cuál es tu e-mail?" required/>
              </div>

              <div class="form-group">
                <input type="number" class="form-control" name="tel" placeholder="¿Cuál es tu número celular?" required required/>
              </div>

              <div class="form-group">
                <input type="month" min="2017-03" class="form-control" name="fecha" data-toggle="tooltip" title="Fecha cercana al día de tu trasteo" required/>
              </div>
              
              <div align="right">
                <button type="submit" class="btn btn-success">
                  Enviar
                </button>
              </div>
            </form>
          </div> --}}

          {{-- FORMULARIO DE DESCUENTO --}}

          <div class="col-xs-12 noticias-share">
            <h3><i class="fa fa-share-alt" aria-hidden="true"></i> Compartir: </h3>

            <a class="whatsapp-icon-share " href="whatsapp://send?text= {{route('articles.show', $articles->id) }}" data-action="share/whatsapp/share">
              <img border="0" src="{{asset('img/whatsapp-icon2.png')}}" alt="Compartir whatsapp">
            </a>

            <a class="Facebook customer share" rel="nofollow" href="http://www.facebook.com/share.php?u={{route('articles.show', $articles->id) }}" title="Facebook Share" target="_blank">
              <img src="{{asset('img/facebook_icon.png')}}" alt="Compartir facebook"/>
            </a>

            <a class="Twitter customer share" href="http://twitter.com/share?url={{route('articles.show', $articles->id) }}&amp;text={!!$articles->title!!} - Tus Cajas Para Trasteos &amp;hashtags=hazmásfáciltuvida" title="Facebook Share" target="_blank">
              <img src="{{asset('img/twitter-icon.png')}}" alt="Compartir twitter"/>
            </a>

            <a class="Google-Plus customer share" href="https://plus.google.com/share?url={{route('articles.show', $articles->id) }}" title="Facebook Share" target="_blank">
              <img src="{{asset('img/google-plus-icon.png')}}" alt="Compartir Google-Plus"/>
            </a>
          </div>

          <div class="col-xs-12" id="noticias-rel">
              <h2 align="center">Noticias relacionadas</h2>
              @foreach(App\articles::where("state", "=", "act")->take('3')->orderBy('id','DESC')->get() as $ar)
                @if( $articles->id != $ar->id)
                  <div class="col-xs-12 kit-content">
                      <div class="kit-lienzo">
                          <div class="kit-img">
                              <img src="{{asset('img/')}}/{{$ar->picture}}" alt="{!!$ar->title!!}" class="img img-reponsive" >
                          </div>
                          <div class="kit-title">
                              <h3>{!!$ar->title!!}</h3>
                          </div>
                          <p>
                              {!!str_limit($ar->description, 100)!!}
                          </p>
                          <div align="right">
                              <a href="{{route('articles.show', $ar->id) }}">Seguir leyendo</a>
                          </div>
                      </div>
                  </div>
                @endif
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
    $('#header ul').find('active').removeClass('active');
        $('#header #header-noticias').addClass('active');
    $('#ejm2 li').click(function() {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
    });
  });
  </script>
@endsection