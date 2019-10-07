@php

    if($order->kit->name == "Arma tu Kit")
    {
       $valueKitArmado =
            (($order->cajas_extra == "") ? 0 : $order->cajas_extra * 8000) +
            (($order->cinta_extra == "") ? 0 : $order->cinta_extra * 7000) +
            (($order->plasticoBurbuja_extra == "") ? 0 : $order->plasticoBurbuja_extra * 1800) +
            (($order->bolsas_extra == "") ? 0 : $order->bolsas_extra * 2300) +
            (($order->marcadores_extra == "") ? 0 : $order->marcadores_extra * 1200) +
            (($order->papelKraft_extra == "") ? 0 : $order->papelKraft_extra * 900);
    }

@endphp

<table class="wrapper" style="background: #ffffff;" border="0" width="600" cellspacing="0" cellpadding="0"
       align="center"><!-- Row 1 Start Here -->
    <tbody>
    <tr>
        <td>
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td width="20">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="20">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <!-- Row 1 End Here --> <!-- Row 2 Start Here -->
    <tr>
        <td>
            <table style="background-repeat: no-repeat; background-color: #98bf11; background-position: left top; background-size: 100% 100%;"
                   border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td class="mobile-gap" style="width: 7.03883%;">&nbsp;</td>
                    <td style="width: 91.343%;">
                        <table border="0" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr style="height: 5px;">
                                <td style="height: 5px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 72px;">
                                <td style="height: 72px;">
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td align="center">
                                                <table border="0" cellspacing="0">
                                                    <tbody>
                                                    <tr>
                                                        <td class="pink-heart" width="34">&nbsp;</td>
                                                        <td width="30">&nbsp;</td>
                                                        <td class="editable"
                                                            style="text-align: center; font-size: 48px; color: #f3e7db; text-transform: uppercase; outline: currentcolor none medium; outline-offset: 2px;"
                                                            contenteditable="false" data-selector="td.editable">&iexcl;
                                                            COMPRA EXITOSA!
                                                        </td>
                                                        <td width="30">&nbsp;</td>
                                                        <td class="pink-heart" width="34">&nbsp;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="height: 12px;">
                                <td style="height: 12px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 155px;">
                                <td style="height: 155px;" align="center">
                                    <div class="editable"
                                         style="outline: currentcolor none medium; outline-offset: 2px;"
                                         contenteditable="false" data-selector="div.editable"><img class="device-width"
                                                                                                   style="display: block;"
                                                                                                   src="http://tuscajasparatrasteos.com/img/logo-blanco.png"
                                                                                                   alt="" width="400"
                                                                                                   height="" border="0"
                                                                                                   data-selector="div.editable img"/>
                                    </div>
                                </td>
                            </tr>
                            <tr style="height: 10px;">
                                <td style="height: 10px;">&nbsp;</td>
                            </tr>
                            {{----}}
                            <tr>
                                <td align="center">
                                    <div class="editable" data-selector="div.editable" style="color: white;">Gracias por preferirnos.<br />Tu pedido llegara en lo pact&aacute;do, puedes comunicarte en cualquier momento con nuestros asesores dando click en los iconos de nuestras redes sociales y numero de whatsapp.</div>
                                </td>
                            </tr>
                            <tr style="height: 12px;">
                                <td style="height: 12px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 12px;">
                                <td style="height: 12px;">&nbsp;</td>
                            </tr>
                            {{----}}
                            <tr style="height: 51px;">
                                <td style="height: 51px;">
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td align="center">
                                                <table style="width: 337px;" border="0" cellspacing="0">
                                                    <tbody>
                                                    <tr>
                                                        <td class="pink-heart" style="width: 44px;">&nbsp;</td>
                                                        <td style="width: 11px;">&nbsp;</td>
                                                        <td class="editable"
                                                            style="text-align: center; font-size: 32px; color: #f3e7db; text-transform: uppercase; outline: currentcolor none medium; outline-offset: 2px; width: 249px;"
                                                            contenteditable="false" data-selector="td.editable">
                                                            {{$order->kit->name}}
                                                        </td>
                                                        <td style="width: 10px;">&nbsp;</td>
                                                        <td class="pink-heart" style="width: 42px;">
                                                            <div class="editable" data-selector="div.editable">&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="height: 12px;">
                                <td style="height: 12px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 28px;">
                                <td class="editable"
                                    style="color: #fff8e9; font-size: 22px; text-align: center; font-weight: bold; outline: currentcolor none medium; outline-offset: 2px; height: 28px;"
                                    contenteditable="false" data-selector="td.editable">{{$order->name}} - {{$order->tel}}
                                </td>
                            </tr>
                            <tr style="height: 1px;">
                                <td style="height: 1px;">&nbsp;</td>
                            </tr>
                            @if($resultado != null)
                                <tr style="height: 28px;">
                                    <td class="editable"
                                        style="color: #fff8e9; font-size: 22px; text-align: center; font-weight: bold; outline: currentcolor none medium; outline-offset: 2px; height: 28px;"
                                        contenteditable="false" data-selector="td.editable">ESTADO DE LA TRANSACCIÓN [{{$resultado}}]
                                    </td>
                                </tr>
                                <tr style="height: 1px;">
                                    <td style="height: 1px;">&nbsp;</td>
                                </tr>
                            @endif

                            <tr style="height: 95px;">
                                <td style="height: 95px;">
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr style="height: 138px;">
                                            <td class="editable"
                                                style="padding-left: 10px; background-color: #668400; color: #fff8e9; font-size: 14px; text-align: left; font-weight: bold; line-height: 1.7; outline: currentcolor none medium; outline-offset: 2px; height: 138px; width: 49.5819%;"
                                                contenteditable="false" data-selector="td.editable">
                                                DATOS GENERALES DEL PEDIDO <br><br>
                                                ID: {{$order->id}}<br>
                                                CEDULA: {{$order->document}}<br>
                                                EMAIL: {{$order->email}}<br>
                                                DIRECCI&Oacute;N: {{$order->address}}<br>
                                                CIUDAD: {{$order->city}}<br>
                                                BARRIO: {{$order->neighborhood}}<br>
                                                FORMA DE PAGO: {{$order->payment}}<br>
                                                FECHA: {{$order->date}}<br>
                                                CODIGO: {{$order->codepromo}}

                                            </td>
                                            <td class="editable"
                                                style="border-left: 1px solid; padding-left: 10px; background-color: #668400; color: #fff8e9; font-size: 14px; text-align: left; font-weight: bold; line-height: 1.7; outline: currentcolor none medium; outline-offset: 2px; height: 138px; width: 49.7492%;"
                                                contenteditable="false" data-selector="td.editable"><br/>
                                                COSTO DE PEDIDO<br/>

                                                <p>
                                                    @if($order->kit->name != "Arma tu Kit")
                                                        <label><strong>VALOR DEL KIT: </strong></label>${{number_format($order->kit->price)}}<br/>
                                                    @else
                                                        <label><strong>VALOR DEL KIT ARMADO: </strong></label> ${{number_format($valueKitArmado)}}<br/>
                                                    @endif
                                                    @if($order->kit->name != "Arma tu Kit")
                                                        <label><strong>VALOR PRODUCTOS EXTRA: </strong></label>${{number_format($order->value_extra)}}<br/>
                                                    @endif
                                                        <label><strong>VALOR DE ENVIO: </strong></label>{{'$'.number_format($order->shipping)}}<br>
                                                        @if($order->shipping == 0)

                                                            @if($order->kit->name != "Arma tu Kit")
                                                                <label><strong>ENVIO: </strong></label>ENVIO INCLUIDO EN EL PEDIDO HASTA 48 HORAS<br>
                                                            @else
                                                                <label><strong>ENVIO: </strong></label>EL CLIENTE LLEGA POR LAS CAJAS <a href="https://goo.gl/maps/SefbZehKM84vQEf96">reclama tu pedido aqui</a><br>
                                                            @endif

                                                        @elseif($order->shipping == 5000)
                                                            <label><strong>ENVIO: </strong></label>CAJAS ANTES DE 24 HORAS<br>
                                                        @elseif($order->shipping == 15000)
                                                            <label><strong>ENVIO: </strong></label>EL CLINETE ESPERA HASTA 48 HORAS PARA EL ENVIO<br>
                                                        @elseif($order->shipping == 20000)
                                                            <label><strong>ENVIO: </strong></label>CAJAS ANTES DE 24 HORAS<br>
                                                        @elseif($order->shipping == (-15000))
                                                            <label><strong>ENVIO: </strong></label>EL CLIENTE LLEGA POR LAS CAJAS <a href="https://goo.gl/maps/SefbZehKM84vQEf96">reclama tu pedido aqui</a><br>
                                                        @endif

                                                        <label><strong>VALOR TOTAL DEL PEDIDO: ${{($order->value_extra == "") ? 0 : number_format($order->value_extra + $order->value)}}</strong></label>
                                                </p>
                                                <hr/>
                                                <p>PRODUCTOS EXTRA:</p>
                                                <ul>
                                                    <li>Cajas: {{$order->cajas_extra}}</li>
                                                    <li>Bolsas: {{$order->bolsas_extra}}</li>
                                                    <li>Plastico Burbuja: {{$order->plasticoBurbuja_extra}}</li>
                                                    <li>Cinta: {{$order->cinta_extra}}</li>
                                                    <li>Marcadores: {{$order->marcadores_extra}}</li>
                                                    <li>Papel kraft: {{$order->papelKraft_extra}}</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="height: 40px;">
                                <td style="height: 40px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 57px;">
                                <td style="height: 57px;">
                                    <table border="0" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td width="35"><a class="editable-lni"
                                                              style="outline: currentcolor none medium; outline-offset: 2px;"
                                                              href="https://www.facebook.com/tuscajasparatrasteos/" data-selector="a.editable-lni"> <img
                                                            style="display: block;"
                                                            src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-512.png"
                                                            alt="" width="35" height="35" border="0"/> </a></td>
                                            <td width="35"><a class="editable-lni" href="https://twitter.com/Tus_Cajas"
                                                              data-selector="a.editable-lni"> <img
                                                            style="display: block;"
                                                            src="https://cdn3.iconfinder.com/data/icons/social-icons-5/607/Twitterbird.png"
                                                            alt="" width="35" height="35" border="0"/> </a></td>
                                            <td width="35"><a class="editable-lni"
                                                              style="outline: currentcolor none medium; outline-offset: 2px;"
                                                              href="https://www.instagram.com/tus_cajas/?hl=es-la" data-selector="a.editable-lni"> <img
                                                            style="display: block;"
                                                            src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-instagram-new-circle-512.png"
                                                            alt="" width="35" height="35" border="0"/> </a></td>
                                            <td width="35">
                                                <a class="editable-lni"
                                                   style="outline: currentcolor none medium; outline-offset: 2px;"
                                                   href="mailto:andrea.rios@grimorum.com" data-selector="a.editable-lni"> <img
                                                            style="display: block;"
                                                            src="https://www.macupdate.com/images/icons256/54060.png"
                                                            alt="" width="35" height="35" border="0"/> </a>
                                            </td>
                                            <td width="35">
                                                <a class="editable-lni"
                                                   style="outline: currentcolor none medium; outline-offset: 2px;"
                                                   href="https://api.whatsapp.com/send?phone=573102082969&text=Hola, tengo una duda" data-selector="a.editable-lni"> <img
                                                            style="display: block;"
                                                            src="https://cdn.icon-icons.com/icons2/840/PNG/128/Whatsapp_icon-icons.com_66931.png"
                                                            alt="" width="35" height="35" border="0"/> </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br/><br/>
                                    <div class="editable"
                                         style="outline: currentcolor none medium; outline-offset: 2px;"
                                         contenteditable="false" data-selector="div.editable"><img
                                                style="display: block;"
                                                src="http://tuscajasparatrasteos.com/img/cajas-footer.png" alt=""
                                                width="600" height="60" border="0" data-selector="div.editable img"/>
                                    </div>
                                </td>
                            </tr>
                            <tr style="height: 45px;">
                                <td style="height: 45px;">&nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class="mobile-gap" style="width: 0.647249%;">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <!-- Row 2 End Here --> <!-- Row 3 Start Here -->
    <tr>
        <td class="mobile-top-gap" height="60">&nbsp;</td>
    </tr>
    <!-- Row 3 End Here --></tbody>
</table>
<p>&nbsp;</p>