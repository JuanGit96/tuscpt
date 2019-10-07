@extends('layouts.general')

@section('metadescription')

    <title>Arma tu kit - Tus Cajas Para Trasteos</title>
    <meta name="description" content="Tenemos todo lo que necesitas para empacar tu trasteo o mudanza a un solo clic y a domicilio en Bogotá. Contáctanos al  305 367 8619">

@endsection

@section('content')
    <style>
        .checks{
            width: 57px;
            height: 39px !important;
            background: white !important;
            border: 1px solid black !important;
            margin-bottom: 11px;

        }
        .label-checks{
            margin-top: 11px;
            font-size: 19px;
        }

        small, .small {
            font-size: 50%;
            font-weight: bold;
        }


        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {

            opacity: 1;

        }

        input[name="document"]::-webkit-inner-spin-button,
        input[name="document"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[name="document"] { -moz-appearance:textfield; }
    </style>
    @include('partials.stylesMoreProducts')

    {{--Panel de carrito visible a scroll--}}
    <div class="panel-collapse collapse in carrito fijar ocultar hidden-xs">
        <div class="panel-body panel-carrito">
            <div>
                <ul>
                    <li><strong class="cantidad-cajas">0</strong> Cajas (60 cm x 40 cm x 40 cm)</li>
                    <li><strong class="cantidad-cintaIndustrial">0</strong> Cinta industrial</li>
                    <li><strong class="cantidad-plastBurbuja">0</strong> Metros de plástico burbuja</li>
                    <li><strong class="cantidad-bolsasIndustriales">0</strong> Bolsas industriales</li>
                    <li><strong class="cantidad-marcadores">0</strong> Marcadores</li>
                    <li><strong class="cantidad-papelKraft">0</strong> Metros de Papel kraft</li>
                </ul>
                <br>
                <div class="form-price pull-right">
                    Total: <strong><span class="total-price">$0</span></strong>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="panel-collapse collapse in carrito fijar ocultar visible-xs">
        <div class="panel-body panel-carrito">
            <div class="form-price pull-left ">
                por solo: <strong class="total-price">$0</strong>
            </div>
        </div>
    </div>
    <input type="hidden" id="valueThisKit" value="0">
    <input type="hidden" id="actualExtraModal" class="actualExtraModal" value="0">
    {{----}}
    <div class="wallpaper">
        <div class="container-fluid form-general form-general-mediana">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-title">
                        <h1 class="text-center">Arma tu kit</h1>
                        <div class="propuesta-v">
                            <hr>
                            <p><span>Encuneta todo lo que necesitas para tu trasteo.</span> ¡Tu eliges la cantidad!</p>
                        </div>
                    </div>
                    <div class="container-fluid form-body">

                        <div class="col-xs-12 col-sm-4 col-lg-3" >
                            <div class="row" id="panel-responsive">
                                <div class="panel-body panel-body1">
                                    <div class="panel-group" id="panel-int2">
                                        {{--<div class="panel panel-default">--}}
                                            {{--<div class="panel-heading title-2-1">--}}
                                                {{--<a class="panel-title collapsed" href="kit-pequena">--}}
                                                    {{--<div width="100%" id="item-2-1">--}}
                                                        {{--Pequeña--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                                {{--<div class="responsive-metros">--}}
                                                    {{--<span><strong>150m&sup2</strong></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="panel panel-default">
                                            <div class="panel-heading title-2-2">
                                                <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-int2" href="#panel-element-2-2">
                                                    <div width="100%">
                                                        <b>CARRITO</b>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="panel-element-2-2" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div>
                                                        <ul>
                                                            <li><strong class="cantidad-cajas">0</strong> Cajas (60 cm x 40 cm x 40 cm)</li>
                                                            <li><strong class="cantidad-cintaIndustrial">0</strong> Cinta industrial</li>
                                                            <li><strong class="cantidad-plastBurbuja">0</strong> Metros de plástico burbuja</li>
                                                            <li><strong class="cantidad-bolsasIndustriales">0</strong> Bolsas industriales</li>
                                                            <li><strong class="cantidad-marcadores">0</strong> Marcadores</li>
                                                            <li><strong class="cantidad-papelKraft">0</strong> Metros de Papel kraft</li>
                                                        </ul>
                                                        <hr>
                                                        <div class="form-price">
                                                            Total: <strong><span class="total-price">$0</span></strong>
                                                        </div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="panel panel-default">--}}
                                            {{--<div class="panel-heading title-2-3">--}}
                                                {{--<a class="panel-title collapsed" href="kit-grande">--}}
                                                    {{--<div width="100%">--}}
                                                        {{--Grande--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                                {{--<div class="responsive-metros">--}}
                                                    {{--<span><strong>800m&sup2</strong></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-lg-9">
                            <div class="row">
                                <form role="form" method="POST" action="{{ action('OrderController@store') }}">

                                    {{ csrf_field() }}

                                    <div class="form-row col-md-12">
                                        <input type="hidden" name="extrasKit" id="extrasKit" value="0">
                                        <div class="form-group">
                                            <h3 style="color: #0287c5; margin-top: -1px;"><b>CANTIDAD</b></h3>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control checks" id ="cantidad-cajas" name="total_cajas">
                                                </div>
                                                <div class="col-sm-11 label-checks">
                                                    Cajas (60 cm x 40cm) <small>COP 8.000,00 c/u</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control checks" id ="cantidad-cintaIndustrial" name="total_cinta">
                                                </div>
                                                <div class="col-sm-11 label-checks">
                                                    Cinta industrial <small>COP 7.000,00 c/u</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control checks" id ="cantidad-plastBurbuja" name="total_papelBurbuja">
                                                </div>
                                                <div class="col-sm-11 label-checks">
                                                    Metros de plástico burbuja <small>COP 1.800,00 c/u</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control checks" id ="cantidad-bolsasIndustriales" name="total_bolsas">
                                                </div>
                                                <div class="col-sm-11 label-checks">
                                                    Bolsas industriales <small>COP 2.300,00 c/u</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control checks" id ="cantidad-marcadores" name="total_marcadores">
                                                </div>
                                                <div class="col-sm-11 label-checks">
                                                    Marcadores <small>COP 1.200,00 c/u</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control checks" id ="cantidad-papelKraft" name="total_papelKraft">
                                                </div>
                                                <div class="col-sm-11 label-checks">
                                                    Metros de Papel Kraft <small>COP 900,00 c/u</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


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


                                    <input type="hidden" name="ArmaTuKit" value="true">
                                    <input type="hidden" id="totalPrice" name="totalPrice" value="">

                                    <div class="form-group" style="display: none">
                                        <select class="form-control" name="kit_id">
                                            <option value='99'></option>
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

                                    <input type="hidden" name="extra_id[0]" id="value1">
                                    <input type="hidden" name="extra_id[1]" id="value2">
                                    <input type="hidden" name="extra_id[2]" id="value3">
                                    <input type="hidden" name="extra_id[3]" id="value4">

                                    <div class="form-group radio-gen col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-3">
                                        <div class="radio-div" id="radios">
                                            @if($isHoliday || $isWeekend)
                                                <div class="radio" id="radio1" style="pointer-events: none;">
                                                    <label ><input type="radio" name="optradio" id="inmediata" value="LO QUIERO YA" disabled><span class="radio-span">¡Lo quiero hoy! <span style="color: red">(Opción NO disponible días festivos o fines de semana)</span> + $20.000</span></label>
                                                </div>
                                            @else
                                                <div class="radio" id="radio1">
                                                    <label ><input type="radio" name="optradio" id="inmediata" value="LO QUIERO YA" checked><span class="radio-span">¡Lo quiero hoy! (opción disponible antes de 3:30 pm) + $20.000</span></label>
                                                </div>
                                            @endif
                                            <br>
                                            <div class="radio" id="radio2">
                                                <label><input type="radio" name="optradio" id="24Horas" value="ESPERO HASTA 48 HORAS"><span class="radio-span">Espero hasta 48 horas + $15.000</span></label>
                                            </div>
                                                <br>
                                            {{-- <div class="radio" id="radio3">
                                              <label><input type="radio" name="optradio" id="48Horas" value="LO ESPERO LAS 48 HORAS GRATIS"><span class="radio-span">Lo espero hasta 48 horas + $0</span></label>
                                            </div> --}}
                                                <div class="radio" id="radio3">
                                                    <label><input type="radio" name="optradio" id="pasoPorEllas" value="PasoPorEllas"><span class="radio-span">Paso por las cajas + $0 (Puedes pasar de lunes a viernes de 10:00am a 4:00pm)  <a style="color: #7b057e;" href="https://goo.gl/maps/SefbZehKM84vQEf96">recibe tu pedido aquí</a></span></label>
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
                                            <small>Envíos de lunes a viernes. (No aplican festivos)</small>
                                        </div>
                                        <button type="button" class="btn" onclick="event.preventDefault(); confirmSection()">
                                            Solicita tu kit
                                        </button>
                                        <input type="submit" id="enviarForm" style="display: none">
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $('#header ul').find('active').removeClass('active');
            $('#header #header-kits').addClass('active');

            $('.title-2-2 .responsive-metros').slideDown('fast');


            //Scripts para carro dinamico

            $('.checks').on("keyup" , function () {

                addproducts($(this));

                totalPrice();

            });

            $('.checks').on("change" , function () {

                addproducts($(this));

                totalPrice();

            });


        });

        var addproducts = function (element) {

            var elementID = element.attr('id');

            var value  = element.val();

            var elementClass = "."+elementID;

            if (value == "")
            {
                $(elementClass).html(0);
            }
            else
            {
                $(elementClass).html(value);
            }

        };

        var totalPrice = function () {

            var cajas = parseInt(8000) * parseInt($(".cantidad-cajas").html());
            var cintaIndustrial = parseInt(7000) * parseInt($(".cantidad-cintaIndustrial").html());
            var plastBurbuja = parseInt(1800) * parseInt($(".cantidad-plastBurbuja").html());
            var bolsasIndustriales = parseInt(2300) * parseInt($(".cantidad-bolsasIndustriales").html());
            var marcadores = parseInt(1200) * parseInt($(".cantidad-marcadores").html());
            var papelKraft = parseInt(900) * parseInt($(".cantidad-papelKraft").html());

            var total = cajas + cintaIndustrial + plastBurbuja + bolsasIndustriales +marcadores + papelKraft;

            $(".total-price").html("$"+total);

            $("#totalPrice").val(total);

            $("#valueThisKit").val(total);

        };

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

        });

    </script>

    @if($isHoliday || $isWeekend)
        <script>
            $(document).ready(function() {

                $("#24Horas").trigger("click");


            });

        </script>
    @endif

    <script>
        var $win = $(window);

        // definir mediente $pos la altura en píxeles desde el borde superior de la ventana del navegador y el elemento

        var $pos = 495;

        $win.scroll(function () {

            if ($win.scrollTop() <= $pos)

                $('.carrito').addClass('ocultar');

            else {

                $('.carrito').removeClass('ocultar');

            }

        });
    </script>

@endsection
