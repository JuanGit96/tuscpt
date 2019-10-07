@extends('layouts.general')

@section('metadescription')

<title>Kit para apartaestudio - Tus Cajas Para Trasteos</title>
<meta name="description" content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Contáctanos al  305 367 8619">

@endsection

@section('content')
<div class="wallpaper">
  <div class="container-fluid form-general form-general-armado">
    <div class="row">
      <div class="col-xs-12">
        <div class="form-title">
          <h1 class="text-center">Kit para apartaestudio</h1>
            <div class="propuesta-v">
              <hr>
              <p>Pequeños espacios, grandes cambios. Tus cajas para trasteos te lleva el kit que necesitas para tu mudanza a <span>un solo clic</span> y a <span>domicilio</span>.</p>
            </div>
        </div>

        <div class="container-fluid  form-body">
          <div class="col-xs-12 col-sm-4 col-lg-3" >

            <div class="row" id="panel-responsive">
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
                         <a class="panel-title collapsed" href="kit-casas">
                             <div width="100%">
                                Casa
                            </div>
                         </a>
                         <div class="responsive-metros">
                            <span><strong>300m&sup2</strong></span>
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


            <div class="row">
            <input type="hidden" id="reloj" name="" value="" disabled="">
                <form role="form" method="POST" action="{{ action('OrderController@store') }}">
                {{ csrf_field() }}

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
                      <select class="form-control" name="city" id="selectcity">
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
                </div>

                <div class="form-group" style="display: none">
                  <select class="form-control" name="kit_id">
                     <option value='1'></option>
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


                <div class="col-xs-12" align="center" style="margin: 20px 0"></div>

             

                 <div class="row">
                  <div class="col-lg-3 col-xs-6 col-sm-6 checkbox-img" >
                    <div class="box-general" id="select_tv">
                      <div class="gamma-description" >
                        <p>Cajas</p>
                      </div>
                      <div class="gamma-selection"></div>
                      <div class="gamma-check">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <br>
                    <div class="cantity" id="cantity-tv" style="text-align: center">
                      <a class="btn" id="remove-tv">-</a>
                      <span >1</span>
                      <a class="btn" id="add-tv">+</a>
                    </div>
                  </div>
                  <div class="col-lg-2 col-xs-6 col-sm-6 checkbox-img">
                    <div class="box-general" id="select-nevera">
                      <div class="gamma-description">
                        <p>Bolsas</p>
                      </div>
                      <div class="gamma-selection"></div>
                      <div class="gamma-check">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <br>
                    <div class="cantity" id="cantity-nevera" style="text-align: center">
                      <a class="btn" id="remove-nevera">-</a>
                      <span >1</span>
                      <a class="btn" id="add-nevera">+</a>
                    </div>
                  </div>
                  <div class="col-lg-2 col-xs-6 col-sm-6 checkbox-img">
                    <div class="box-general" id="select-porcelana">
                      <div class="gamma-description">
                        <p>Papel burbuja</p>
                      </div>
                      <div class="gamma-selection"></div>
                      <div class="gamma-check">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <br>
                    <div class="cantity" id="cantity-porcelana" style="text-align: center">
                      <a class="btn" id="remove-porcelana">-</a>
                      <span id="valor">1</span>
                      <a class="btn" id="add-porcelana">+</a>
                    </div>
                  </div>
                  <div class="col-lg-2 col-xs-6 col-sm-6 checkbox-img">
                    <div class="box-general" id="select-porcelana">
                      <div class="gamma-description">
                        <p>Cinta</p>
                      </div>
                      <div class="gamma-selection"></div>
                      <div class="gamma-check">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <br>
                    <div class="cantity" id="cantity-porcelana" style="text-align: center">
                      <a class="btn" id="remove-porcelana">-</a>
                      <span id="valor">1</span>
                      <a class="btn" id="add-porcelana">+</a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-xs-6 col-sm-6 checkbox-img">
                    <div class="box-general" id="select-porcelana">
                      <div class="gamma-description">
                        <p>Marcadores</p>
                      </div>
                      <div class="gamma-selection"></div>
                      <div class="gamma-check">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <br>
                    <div class="cantity" id="cantity-porcelana" style="text-align: center">
                      <a class="btn" id="remove-porcelana">-</a>
                      <span id="valor">1</span>
                      <a class="btn" id="add-porcelana">+</a>
                    </div>
                  </div>
                </div>

                <br>
                <div class="form-group radio-gen col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-3" >
                  <div class="radio-div" id="radios">
                    <div class="radio" id="radio1">
                      <label ><input type="radio" name="optradio" id="inmediata" value="LO QUIERO YA" checked><span class="radio-span">¡Lo quiero hoy! (opción disponible antes de 3:30 pm) + $20.000</span></label>
                    </div>
                    <br>
                    <div class="radio" id="radio2">
                      <label><input type="radio" name="optradio" id="24Horas" value="LO QUIERO ANTES DE 24 HORAS"><span class="radio-span">Espero hasta 48 horas + $15.000</span></label>
                    </div>

                  </div>
                </div>

                <div class="col-xs-12" align="center">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="vehicle" value="Términos" required><span class="checkbox-span"> Acepto <a href="{{asset('terminos/Términos%20y%20condiciones%20Tus%20cajas%20Clientes%20%20V2.pdf')}}" download="Términos y Condiciones"><strong>Términos y Condiciones</strong></a></span>
                    </label>
                  </div>
                  <div class="alert alert-warning">
                    <small>Envíos de lunes 12:00 m a sábado 12:00 m. (No aplican festivos)</small>
                  </div>
                  <button type="submit" class="btn">
                    Solicita tu kit
                  </button>
                </div>
                  {!! Form::close() !!}
              <!-- </form> -->
            </div>
          </div>
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
    // console.log(hora);
  });

  $(document).ready(function() {

    $('#header ul').find('active').removeClass('active');
    $('#header #header-kits').addClass('active');

    $('.title-1-1 .responsive-metros').slideDown('fast');

    $('#selectcity').on('change', function() {
              if (this.value != 'bogota') {
                $('#radios').hide();

                swal({
                title: "! Advertencia !",
                text: "Los envios fuera de la ciudad tienen un costo de 50.000",
                type: "warning",
                });
              }else{
                $('#radios').show();
              }
              
          })
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
