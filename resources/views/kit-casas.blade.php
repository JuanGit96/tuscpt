@extends('layouts.general')

@section('metadescription')

<title>Kit para casa - Tus Cajas Para Trasteos</title>
<meta name="description" content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Contáctanos al  305 367 8619">

@endsection

@section('content')
    <style>

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] { -moz-appearance:textfield; }
    </style>
    @include('partials.stylesMoreProducts')

    {{--Panel de carrito visible a scroll--}}
    <div class="panel-collapse collapse in carrito fijar ocultar hidden-xs">
        <div class="panel-body panel-carrito">
            <div>
                <ul>
                    <li><strong>34</strong> Cajas </li>
                    <li><strong>1</strong> Cinta industrial</li>
                    <li><strong>30</strong> Metros de plástico de burbuja</li>
                    <li><strong>12</strong> Bolsas industriales</li>
                    <li><strong>1</strong> Marcador</li>
                </ul>
                <div class="form-price pull-right">
                    por solo: <strong>$315.000</strong>
                    <div class="hasMoreProducts ocultar" style="padding-left: 81px;"><br>
                        + $<strong class="actualExtra pull-right">0</strong>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="panel-collapse collapse in carrito fijar ocultar visible-xs">
        <div class="panel-body panel-carrito">
            <div class="form-price pull-left ">
                por solo: <strong>$315.000</strong>
                <div class="hasMoreProducts ocultar" style="padding-left: 81px;"><br>
                    <div class="pull-left">+ $</div><strong class="actualExtra pull-left">0</strong>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="valueThisKit" value="315000">
    <input type="hidden" id="actualExtraModal" class="actualExtraModal" value="0">
    {{----}}
<div class="wallpaper">
  <div class="container-fluid form-general form-general-casas">
    <div class="row">
      <div class="col-md-12">
        <div class="form-title">
          <h1 class="text-center">Kit para casas</h1>
          <div class="propuesta-v">
            <hr>
            <p>¿La <span>casa de tus sueños</span> y no sabes cómo empacar? tus cajas para trasteos tiene todo lo que necesitas para <span>el trasteo de tu hogar</span>.</p>
          </div>
        </div>
        <div class="container-fluid form-body">
          
          <div class="col-xs-12 col-sm-4 col-lg-3" >
            <div class="row" id="panel-responsive">
              <div class="panel-body panel-body1">
                <div class="panel-group" id="panel-int1">
                <div class="panel panel-default">
                    <div class="panel-heading title-1-1" >
                        <a class="panel-title collapsed" href="kit-apartaestudios">
                            <div width="100%" id="item-1-1">
                                Apartaestudio
                            </div>
                        </a>
                        <div class="responsive-metros">
                          <span><strong>50m&sup2</strong></span>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading title-1-2">
                         <a class="panel-title collapsed" href="kit-apartamentos">
                             <div width="100%">
                                Apartamento
                            </div>
                         </a>
                         <div class="responsive-metros">
                            <span><strong>140m&sup2</strong></span>
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
                            <span><strong>300m&sup2</strong></span>
                        </div>
                    </div>
                    <div id="panel-element-1-3" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div>
                                <ul>
                                    <li><strong>34</strong> Cajas </li>
                                    <li><strong>1</strong> Cinta industrial</li>
                                    <li><strong>30</strong> Metros de plástico de burbuja</li>
                                    <li><strong>12</strong> Bolsas industriales</li>
                                    <li><strong>1</strong> Marcador</li>
                                </ul>
                                <div class="form-price">
                                  por solo: <strong>$315.000</strong>
                                    <div class="hasMoreProducts ocultar" style="padding-left: 81px;"><br>
                                        + $<strong class="actualExtra pull-right">0</strong>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading title-2-2">
                         <a class="panel-title collapsed" href="arma-tu-kit">
                             <div width="100%">
                                Arma tu Kit
                            </div>
                         </a>
                         <div class="responsive-metros">
                            <span><strong>300m&sup2</strong></span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-8 col-lg-9">
              <form role="form" method="POST" action="{{ action('OrderController@store') }}">

                {{ csrf_field() }}
                  <div class="row">

                  <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nombre completo" required>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <input type="number" class="form-control" name="document" placeholder="Cedula (Para facturacion)" required>
                  </div>
                </div>
                
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                     <input type="codepromo" id="codepromo" class="form-control" name="codepromo" placeholder="Si tienes un código promocional, ingrésalo aquí">
                  </div>
                </div>
                
                <div class="col-xs-12" style="padding:0">
                  <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="tel" placeholder="Teléfono fijo o celular" required>
                    </div>
                  </div>

                  
                  
                  <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="address" placeholder="Dirección" required>
                    </div>
                  </div>
                  
                  <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="neighborhood" placeholder="Barrio" required>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                      <select class="form-control" name="city" id="selectcity" required>
                        <option value="" disabled="" selected="">Ciudad</option>
                        <option value="bogota">Bogotá</option>
                          <option value="cali">Cali</option>
                          <option value="medellin">Medellín</option>
                          <option value="tunja">Tunja</option>
                          <option value="barranquilla">Barranquilla</option>
                          <option value="ibague">Ibagué</option>
                          <option value="cartagena">Cartagena</option>
                          <option value="monteria">Montería</option>
                          <option value="stamarta">Sta Marta</option>
                          <option value="bucaramanga">Bucaramanga</option>
                      </select>
                     <!--  <input type="text" class="form-control" name="city" id="city" onchange="checkInput(this);" placeholder="Ciudad" data-toggle="tooltip" title="Todo envío por fuera de Bogotá tendrá un costo adicional de $25.000" required> -->
                    </div>
                  </div>
                </div>

                <div class="form-group" style="display: none">
                  <select class="form-control" name="kit_id">
                     <option value='4'></option>
                  </select>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                     <select class="form-control" name="payment" id="payment" required>
                        <option value=''>Selecciona la forma de pago</option>
                        <option id="contra_entrega_pago" value='Contra entrega' >Contra entrega</option>
                        <option value='Tarjeta de credito' >Tarjeta de crédito</option>
                        <option value='PSE' >PSE</option>
                        {{--<option value='Baloto'>Baloto</option>--}}
                     </select>
                  </div>
                </div>
            </div>
                



                {{-- IMÁGENES SELECCIONABLES --}}
                  @include('partials.moreProducts',['alertDinamicColor' => 'alert-dinamic-casa'])

                {{--<div class="col-xs-12 ">--}}
                  {{--<div class="col-xs-12 col-sm-6 col-lg-3 checkbox-img" >--}}
                    {{--<!-- <input type="checkbox" name=""> -->--}}
                    {{--<div class="box-general" id="img1">--}}
                      {{--<img src="{{asset('img/biblioteca.jpg')}}" alt="biblioteca casa" class="img img img-responsive" width="100%">--}}
                      {{--<div class="gamma-description">--}}
                        {{--<p>Mi biblioteca es más grande que la de mis amigos</p>--}}
                      {{--</div>--}}
                      {{--<div class="gamma-selection"></div>--}}
                      {{--<div class="gamma-check">--}}
                        {{--<i class="fa fa-check-circle" aria-hidden="true"></i>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="col-xs-12 col-sm-6 col-lg-3 checkbox-img">--}}
                    {{--<div class="box-general" id="img2">--}}
                      {{--<img src="{{asset('img/decoracion.jpg')}}" alt="decoración casa" class="img img img-responsive" width="100%">--}}
                      {{--<div class="gamma-description">--}}
                        {{--<p>Mi casa tiene más accesorios de decoración de lo normal</p>--}}
                      {{--</div>--}}
                      {{--<div class="gamma-selection"></div>--}}
                      {{--<div class="gamma-check">--}}
                        {{--<i class="fa fa-check-circle" aria-hidden="true"></i>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="col-xs-12 col-sm-6 col-lg-3 checkbox-img">--}}
                    {{--<div class="box-general" id="img3">--}}
                      {{--<img src="{{asset('img/cocina.jpg')}}" alt="cocina casa" class="img img img-responsive" width="100%">--}}
                      {{--<div class="gamma-description">--}}
                        {{--<p>Amo la cocina y tengo todos los juguetes para hacer platos geniales</p>--}}
                      {{--</div>--}}
                      {{--<div class="gamma-selection"></div>--}}
                      {{--<div class="gamma-check">--}}
                        {{--<i class="fa fa-check-circle" aria-hidden="true"></i>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="col-xs-12 col-sm-6 col-lg-3 checkbox-img">--}}
                    {{--<div class="box-general" id="img4">--}}
                      {{--<img src="{{asset('img/arte.jpg')}}" alt="arte casa" class="img img img-responsive" width="100%">--}}
                      {{--<div class="gamma-description">--}}
                        {{--<p>Mi casa es como una galería de arte</p>--}}
                      {{--</div>--}}
                      {{--<div class="gamma-selection"></div>--}}
                      {{--<div class="gamma-check">--}}
                        {{--<i class="fa fa-check-circle" aria-hidden="true"></i>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  {{--</div>--}}

                {{--</div>--}}
                {{-- FIN IMÁGENES SELECCIONABLES --}}

                <input type="hidden" name="extra_id[0]" id="value1">
                <input type="hidden" name="extra_id[1]" id="value2">
                <input type="hidden" name="extra_id[2]" id="value3">
                <input type="hidden" name="extra_id[3]" id="value4">


                  <input type="hidden" id="kits" name="kits" value="true">


                  @include('partials.checksEnvio')

                <div class="col-xs-12" align="center">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="vehicle" value="Términos" required><span class="checkbox-span"> Acepto <a href="{{asset('terminos/Términos%20y%20condiciones%20Tus%20cajas%20Clientes%20%20V2.pdf')}}" download="Términos y Condiciones"><strong>Términos y Condiciones</strong></a></span>
                    </label>
                  </div> 
                  <div class="alert alert-warning">
                    <small>Envíos de lunes a viernes. (No aplican festivos)</small>
                  </div>
                    <button type="button" class="btn" onclick="event.preventDefault(); confirmSection()">
                        Solicita tu kit
                    </button>
                    <input type="submit" id="enviarForm" style="display: none">
                </div>
              </form>

          </div> 

          <input type="hidden" id="reloj" name="" value="" disabled="">

        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')
<script src="{{asset('js/hora.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

  $(document).ready(function() {

    $('#header ul').find('active').removeClass('active');
    $('#header #header-kits').addClass('active');

    $('.title-1-3 .responsive-metros').slideDown('fast');
    $('#selectcity').on('change', function() {
              if (this.value != 'bogota') {
                $('#radios').hide();
                $('#contra_entrega_pago').hide();
                swal({
                title: "! Advertencia !",
                text: "Los envios fuera de la Bogotá tienen un costo de 30.000 y NO pueden ser pagados CONTRA ENTREGA",
                type: "warning",
                });
              }else{
                $('#radios').show();
                $('#contra_entrega_pago').show();
              }
              
          })
    
  });

</script>
@if($isHoliday || $isWeekend)
    <script>
        $(document).ready(function() {

        $("#24Horas").trigger("click");


        });

    </script>
@endif

    @include('partials.scriptMoreProducts')

@endsection
