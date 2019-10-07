@extends('layouts.general')

@section('metadescription')

<title>Kit para oficina pequeña - Tus Cajas Para Trasteos</title>
<meta name="description" content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Contáctanos al  305 367 8619">

@endsection

@section('content')
<div class="wallpaper">
  <div class="container-fluid form-general form-general-pequena">
    <div class="row">
      <div class="col-md-12">
        <div class="form-title">
          <h1 class="text-center">Kit de oficina pequeña</h1>
          <div class="propuesta-v">
            <hr>
            <p><span>Tu futuro</span> pertenece a este nuevo espacio, con nuestro kit será más fácil tu cambio y <span>nada te faltará</span>. <span>¡Adquiérelo ya!</span></p>
          </div>
        </div>
        <div class="container-fluid form-body">

          <div class="col-xs-12 col-sm-4 col-lg-3" >
            <div class="row" id="panel-responsive">
              <div class="panel-body panel-body1">
                <div class="panel-group" id="panel-int2">
                  <div class="panel panel-default">
                      <div class="panel-heading title-2-1">
                           <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-int2" href="#panel-element-2-1" >
                              <div width="100%" id="item-2-1">
                                  Pequeña
                              </div>
                           </a>
                           <div class="responsive-metros">
                              <span><strong>150m&sup2</strong></span>
                          </div>
                      </div>
                      <div id="panel-element-2-1" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <div>
                            <ul>
                                <li><strong>20</strong> Cajas</li>
                                <li><strong>12</strong> Cajas grandes</li>
                                <li><strong>2</strong> Cinta industrial</li>
                                <li><strong>6</strong> Metros de plástico de burbuja</li>
                                <li><strong>2</strong> Bisturís industriales</li>
                                <li><strong>2</strong> Marcadores</li>
                            </ul>
                            <div class="form-price">
                              por solo: <strong>$262.990</strong>
                            </div>
                            <br>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading title-2-2">
                           <a class="panel-title collapsed" href="kit-mediana">
                              <div width="100%">
                                  Mediana
                              </div>
                           </a>
                           <div class="responsive-metros">
                              <span><strong>400m&sup2</strong></span>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading title-2-3">
                           <a class="panel-title collapsed" href="kit-grande">
                              <div width="100%">
                                  Grande
                              </div>
                           </a>
                           <div class="responsive-metros">
                              <span><strong>800m&sup2</strong></span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-8 col-lg-9">
            <div class="row">
              <form role="form" method="POST" action="{{ action('OrderController@store') }}">

                {{ csrf_field() }}
                
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nombre completo" required>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <input type="number" class="form-control" name="document" placeholder="Documento (Para facturacion)" required>
                  </div>
                </div>
                
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
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
                      <select class="form-control" name="city">
                        <option value="" disabled="" selected="">Ciudad</option>
                        <option value="bogota">Bogotá</option>
                        <option value="cota">Cota</option>
                        <option value="chia">Chia</option>
                        <option value="medellin">Medellin</option>
                        <option value="cali">Cali</option>
                      </select>
                     <!--  <input type="text" class="form-control" name="city" id="city" onchange="checkInput(this);" placeholder="Ciudad" data-toggle="tooltip" title="Todo envío por fuera de Bogotá tendrá un costo adicional de $25.000" required> -->
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
                </div>

                <div class="form-group" style="display: none">
                  <select class="form-control" name="kit_id">
                     <option value='5'></option>
                  </select>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                     <select class="form-control" name="payment" id="payment" required>
                        <option value=''>Selecciona la forma de pago</option>
                        <option value='Contra entrega' >Contra entrega</option>
                        <option value='Tarjeta de credito' >Tarjeta de crédito</option>
                        <option value='PSE' >PSE</option>
                        <option value='Baloto'>Baloto</option>
                     </select>
                  </div>
                </div>
                
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                     <input type="codepromo" id="codepromo" class="form-control" name="codepromo" placeholder="Si tienes un código promocional, ingrésalo aquí">
                  </div>
                </div>

                <input type="hidden" name="extra_id[0]" id="value1">
                <input type="hidden" name="extra_id[1]" id="value2">
                <input type="hidden" name="extra_id[2]" id="value3">
                <input type="hidden" name="extra_id[3]" id="value4">

                <div class="form-group radio-gen col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-3">
                  <div class="radio-div">
                    <div class="radio" id="radio1">
                      <label ><input type="radio" name="optradio" id="inmediata" value="LO QUIERO YA" checked><span class="radio-span">¡Lo quiero hoy! (opción disponible antes de 3:30 pm) + $30.000</span></label>
                    </div>
                    <div class="radio" id="radio2">
                      <label><input type="radio" name="optradio" id="24Horas" value="LO QUIERO ANTES DE 24 HORAS"><span class="radio-span">Espero hasta 48 horas + $20.000</span></label>
                    </div>
                    {{-- <div class="radio" id="radio3">
                      <label><input type="radio" name="optradio" id="48Horas" value="LO ESPERO LAS 48 HORAS GRATIS"><span class="radio-span">Lo espero hasta 48 horas + $0</span></label>
                    </div> --}}
                  </div>
                </div>

                <div class="col-xs-12" align="center">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="vehicle" value="Términos" required><span class="checkbox-span"> Acepto <a href="{{asset('terminos/Términos%20y%20condiciones%20Tus%20cajas%20Clientes%20%20V2.pdf')}}" download="Términos y Condiciones"><strong>Términos y Condiciones</strong></a></span>
                    </label>
                  </div> 
                  <div class="alert alert-warning">
                    <small>Envíos de lunes a viernes. (No aplican festivos)</small>
                 </div>
                  <button type="submit" class="btn">
                    Solicita tu kit
                  </button>
                </div>
              </form>
            </div>
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
<script type="text/javascript">

$(document).ready(function() {

    $('#header ul').find('active').removeClass('active');
    $('#header #header-kits').addClass('active');

    $('.title-2-1 .responsive-metros').slideDown('fast');
    // $('#codepromo').on('change', function(e){
    //   console.log(e);
    //   var code = e.target.value;
    //   console.log(code);
    //   $.get('consulta?code=' + code, function(data){
    //     if (code == "") {

    //     }
    //     else{
          
    //       if (data == 'Ingrese un código valido') {
    //         $('#codepromo').val("");
    //         alert(data);
    //       }


    //       else{
    //         alert(data);
    //       }
    //     }
    //   });
    // });
    
  });
</script>
@endsection
