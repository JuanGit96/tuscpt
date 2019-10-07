@extends('layouts.general')
 
@section('metadescription')

<title>Estado de tu pedido - Tus Cajas Para Trasteos - Kits de cajas de cartón</title>
<meta name="description" content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Contáctanos al  305 367 8619">

@endsection

@section('content')

<div id="form-pedido">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">
          Consulta el estado de tu pedido
        </h1>
        
         <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
            <div class="form">  
{{--                <div class="form-group">--}}
{{--                  <input type="email" name="correo" class="form-control" placeholder="Ingresa tu correo" required />--}}
{{--                </div>--}}

                <h3 id="estadoPedido">
                </h3>
                <a href="{{$whatsappLink}}">
                    <button type="button" class="btn" id="boton_consultar"  name="estado">
                        Consultar
                    </button>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#boton_consultar').click(function(){
      var correo = $('input[name=correo]').val();
      $.ajax({
          type: 'GET',
          url: '{{url("consultap")}}',
          data: {
            'correo': correo
          },
          success: function(data){
            console.log(data);
            if (data.response == true ) {
              console.log(data);
              $('#estadoPedido').append('Hola, '+ data.data.name +'.<br><br><strong>'+data.data.state+'</strong>');
              document.getElementById('boton_consultar').style.display ='none';
            }
            else if (data.response == false) {
              console.log(data);
              $('#estadoPedido').append('<strong>No existen pedidos asociado a este correo '+ data.data +'</strong>');
              document.getElementById('boton_consultar').style.display ='none';
            }
          },
          error: function(error){
              console.log(error);
          }
      });
    });
  });
</script>
@endsection()