<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Core\orderTraits;
use App\Http\Core\TipoDispositivo;
use App\Orders;
use App\Codepromo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Extras;

class OrderController extends Controller {

    use TipoDispositivo;
    use orderTraits;

    public $resultados;

   public function __construct() {
      $this->middleware('web');

       $this->resultados = [
           4 => 'rechazado por la entidad financiera',
           5 => 'rechazado por el banco',
           6 => 'rechazado por fondos insuficientes',
           7 => 'rechazado por tarjeta inválida',
           8 => 'rechazado por débito automático no permitido',
           9 => 'rechazado por tarjeta vencida',
           10 => 'rechazado por tarjeta restringida',
           12 => 'rechazado por fecha de expiración o código de seguridad inválidos',
           13 => 'rechazado',
           14 => 'rechazado por transacción inválida',
           15 => 'puesto en espera, la transacción se encuentra en validación manual',
           17 => 'rechazado porque el valor excede el máximo permitido por la entidad',
           20 => 'rechazado por transacción expirada',
           22 => 'rechazado por tarjeta no autorizada para comprar por internet',
           23 => 'rechazado por sospecha de fraude',
           25 => 'puesto en espera, el recibo de pago se ha generado',
           26 => 'puesto en espera, el recibo de pago se ha generado',
           9994 => 'puesto en espera de confirmación de PSE',
           9995 => 'rechazado por certificado digital no encontrado',
           9996 => 'rechazado por error tratando de cominicarse con el banco',
           9997 => 'rechazado por error comunicándose con la entidad financiera',
           9998 => 'rechazado por transacción no permitida al tarjetahabiente',
       ];

   }

   public function store(Request $request) {

       $whatsappLink = $this->whatsapLink();

       try
       {
           DB::commit();

           $this->validate($request, [
               'name' => 'required|max:150',
               'email' => 'required|email|max:150',
               'tel' => 'required|max:150',
               'city' => 'required',
               'neighborhood' => 'required',
               'kit_id' => 'required',
               'address' => 'required',
               'payment' => 'required',
               'document' => 'required',
           ]);

           $order = \App\Orders::create([
               'name' => $request->name,
               'email' => $request->email,
               'tel' => $request->tel,
               'city' => $request->city,
               'address' => $request->address,
               'neighborhood' => $request->neighborhood,
               'kit_id' => $request->kit_id,
               'document' => $request->document,
               'extra_id' => 0,
               'payment' => $request->payment,
               'date' => date('Y-m-d H:i:s'),
               'code' => str_random(20),
               'state' => 'Hemos recibido tu pedido',
               'codepromo' => $request->codepromo,

           ]);

           if ($request->extraProductsOk || $request->has('ArmaTuKit'))
           {
               $order->cajas_extra = $request->total_cajas;
               $order->bolsas_extra = $request->total_bolsas;
               $order->cinta_extra = $request->total_cinta;
               $order->marcadores_extra = $request->total_marcadores;
               $order->plasticoBurbuja_extra = $request->total_papelBurbuja;
               $order->papelKraft_extra = $request->total_papelKraft;
               $order->value_extra = $request->extrasKit;
           }


           $ciudad = 0;

           if ($request->has('ArmaTuKit'))
           {
               $aux = $request->totalPrice;

           }
           else
           {
               $aux = $order->kit->price;
           }


           if ($request->city != 'bogota')
           {
               # code...
               $order->shipping = 30000;
               $aux = $aux + 30000;
           }
           else if ($request->get('optradio') == 'LO QUIERO YA')
           {
               if($request->has("kits"))
               {
                   $order->shipping = 5000;
                   $aux = $aux + 5000;
               }
               else
               {
                   $order->shipping = 20000;
                   $aux = $aux + 20000;
               }

           }
           else if ($request->get('optradio') == 'ESPERO HASTA 48 HORAS' && !$request->has("envio_incluido"))
           {
               if($request->has("kits"))
               {
                   $order->shipping = 0;
               }
               else
               {
                   $order->shipping = 15000;
                   $aux = $aux + 15000;
               }

           }
           else
           {
               if ($request->has('ArmaTuKit'))
                    $order->shipping = 0;
               else
               {
                   $order->shipping = -15000;
                   $aux = $aux - 15000;
               }

           }

           $code = Codepromo::all();

           $porciento=0;

           foreach ($code as $c) {
               # code...
               if ($request->codepromo == $c->code) {
                   # code...
                   $porciento = ($aux * $c->discount)/100;
               }
           }

           $aux = $aux - $porciento;

           if (!$request->has('PasoPorEllas'))
               $order->hora_entrega = $request->get('optradio');
           else
               $order->hora_entrega = "ENVIO INCLUIDO";

           $order->value = $aux;

           $order->save();

           if ($order->payment == 'Contra entrega') {

               //Enviando Mail a comprador y a tuscajas
               $this->sendMail($order);

               return view('gracias',compact('whatsappLink'));
           } else {

            $ammount = $aux+$order->value_extra;

               $ApiKey = config('payu.ApiKey');
               $merchantId = config('payu.merchantId');
               $accountId = config('payu.accountId');
               $datos = [
                   'merchantId' => $merchantId,
                   'accountId' => $accountId,
                   'description' => $order->kit->name,
                   'extra1' => $order->kit->description,
                   'extra2' => $order->kit->contents,
                   'payerFullName' => $order->name,
                   'telephone' => $order->tel,
                   'email' => $order->email,
                   'shippingAddress' => $order->address,
                   'referenceCode' => $order->code,
                   'amount' => $ammount,
                   'tax' => 0,
                   'taxReturnBase' => 0,
                   'currency' => 'COP',
                   'signature' => md5($ApiKey . '~' . $merchantId . '~' . $order->code . '~' . $ammount . '~COP'),
                   'test' => config('payu.test'),
                   'urlPost' => config('payu.urlPost'),
                   'buyerEmail' => $order->email,
                   'responseUrl' => url('/order/payment'),
                   'confirmationUrl' => url('/order/response'),
                   'lng' => 'es',
               ];

               //Enviando Mail a comprador y a tuscajas
               //$this->sendMail($order);

               return view('pago', compact('datos','whatsappLink'));
           }

       }
       catch (\Exception $exception)
       {
           DB::rollback();
           dd($exception);
       }

   }

   public function payment(Request $request) {

       $whatsappLink = $this->whatsapLink();

      $ApiKey = config('payu.ApiKey');

      $merchantId = config('payu.merchantId');

      $accountId = config('payu.accountId');

      $newValue = number_format(round($request->TX_VALUE, 1, PHP_ROUND_HALF_EVEN), 1, ".", "");

      $signature = md5($ApiKey . '~' . $merchantId . '~' . $request->referenceCode . '~' . $newValue . '~' . $request->currency . '~' . $request->transactionState);


      if ($signature == $request->signature)
      {
         $order = Orders::where("code", "=", $request->referenceCode)->first();

         if ($order)
         {

            if ($request->transactionState == 4)
            {
               $order->state = 'Pagado';

               $order->response = json_encode($request);

               $order->response_code = $request->response_code_pol;

               $order->response_date = date('Y-m-d H:i:s');

               $order->save();

               #capturando estado y enviando correo
                if (array_has($this->resultados, $request->polResponseCode))
                {
                    $resultado = $this->resultados[$request->polResponseCode];
                }
                else
                {
                    $resultado = 'Aceptada';
                }

                $state = $request->transactionState;

                //Enviando Mail a comprador y a tuscajas
                $this->sendMail($order, $resultado);

               return view('aceptado', compact('order','whatsappLink'));

            }
            else
            {
               $order->state = 'rechazado';

               $order->response = json_encode($request);

               $order->response_code = $request->response_code_pol;

               $order->response_date = date('Y-m-d H:i:s');

               $order->save();

               if ($request->transactionState == 6) #Transacción aprobada
               {
//                  Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
//                     $m->from('contacto@tuscajasparatrasteos.com', 'TusCajas');
//                      $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
//                      $m->to("contacto@tuscajasparatrasteos.com", "Tus cajas")->subject('Nueva orden en tus cajas');
//                      $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas');
//                      $m->to("andrea.rios@grimorum.com", "Andrea Rios")->subject('Nueva orden en tus cajas');
//                      $m->to("tatiana.cardenas@grimorum.com", "Tatiana Cardenas")->subject('Nueva orden en tus cajas');
//
//                  });
               }
               elseif ($request->transactionState == 104) #Error
               {
//                  Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
//                     $m->from('contacto@tuscajasparatrasteos.com', 'TusCajas');
//                    $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
//                    $m->to("contacto@tuscajasparatrasteos.com", "Tus cajas")->subject('Nueva orden en tus cajas');
//                    $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas');
//                    $m->to("andrea.rios@grimorum.com", "Andrea Rios")->subject('Nueva orden en tus cajas');
//                    $m->to("tatiana.cardenas@grimorum.com", "Tatiana Cardenas")->subject('Nueva orden en tus cajas');
//
//                  });
               }
               elseif ($request->transactionState == 5) #Transacción expirada
               {
//                  Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
//                     $m->from('contacto@tuscajasparatrasteos.com', 'TusCajas');
//                      $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
//                      $m->to("contacto@tuscajasparatrasteos.com", "Tus cajas")->subject('Nueva orden en tus cajas');
//                      $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas');
//                      $m->to("andrea.rios@grimorum.com", "Andrea Rios")->subject('Nueva orden en tus cajas');
//                      $m->to("tatiana.cardenas@grimorum.com", "Tatiana Cardenas")->subject('Nueva orden en tus cajas');
//
//                  });
               }
               elseif ($request->transactionState == 7 || $request->transactionState == 14 || $request->transactionState == 15
                   || $request->transactionState == 10 || $request->transactionState == 12  || $request->transactionState == 18) #Pendiente
               {

               }

               if (array_has($this->resultados, $request->polResponseCode))
               {
                  $resultado = $this->resultados[$request->polResponseCode];
               }
               else
               {
                  $resultado = 'rechazado';
               }

               $state = $request->transactionState;

                //Enviando Mail a comprador y a tuscajas
                $this->sendMail($order, $resultado);

               return view('rechazado', compact('order','state','resultado','whatsappLink'));
            }
         }
         else
         {
            return view('intentar',compact('whatsappLink'));
         }
      }
      else
      {
         return view('rechazado',compact('whatsappLink'));
      }
   }

   public function response(Request $request) {
       $ApiKey = config('payu.ApiKey');
       $merchantId = config('payu.merchantId');
       $accountId = config('payu.accountId');
       $newValue = $request->TX_VALUE;
       $signature = md5($ApiKey . '~' . $merchantId . '~' . $request->referenceCode . '~' . $newValue . '~COP~' . $request->transactionState);
       if ($signature == $request->signature) {
           $order = App\Order::where("code", "=", $request->referenceCode)->first();
           if ($order) {
               if ($request->state_pol == 4) {
                   $order->state = 'pagado';
                   $order->response = json_encode($request);
                   $order->response_code = $request->polResponseCode;
                   $order->response_date = date('Y-m-d H:i:s');
                   $order->save();
                   Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                       $m->from('contacto@tuscajasparatrasteos.com', 'TusCajas');
                       $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                       $m->to("contacto@tuscajasparatrasteos.com", "Tus cajas")->subject('Nueva orden en tus cajas');
                       $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                       $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                   });
               } else {
                   $order->state = 'rechazado';
                   $order->response = json_encode($request);
                   $order->response_code = $request->polResponseCode;
                   $order->response_date = date('Y-m-d H:i:s');
                   $order->save();
                   if ($request->state_pol == 6) {
                       Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                           $m->from('contacto@tuscajasparatrasteos.com', 'TusCajas');
                           $m->to('andrea.rios@grimorum.com', 'tuscajas')->subject('Nueva orden en tus cajas');
                           $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                           $m->to("contacto@tuscajasparatrasteos.com", "Tus cajas")->subject('Nueva orden en tus cajas');
                           $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                       });
                   } else {
                       Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                           $m->from('contacto@tuscajasparatrasteos.com', 'TusCajas');
                           $m->to('andrea.rios@grimorum.com', 'tuscajas')->subject('Nueva orden en tus cajas');
                           $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                           $m->to("contacto@tuscajasparatrasteos.com", "Tus cajas")->subject('Nueva orden en tus cajas');
                           $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                       });
                   }
               }
           }
       }
       if ($request->referenceCode == "peiky" && $request->state_pol == 4) {

       }
       return 0;

   }


}
