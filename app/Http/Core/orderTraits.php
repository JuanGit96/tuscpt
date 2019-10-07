<?php namespace App\Http\Core;

use App\Orders;
use Mail;

trait orderTraits
{
    public function sendMail(Orders $order, $resultado = null)
    {
        Mail::send('emails.order', ['order' => $order, 'resultado' => $resultado], function ($m) use ($order) {
            $m->from('contacto@tuscajasparatrasteos.com', 'TusCajas');
            $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject("Orden #{$order->id} en tus cajas");
            $m->to("contacto@tuscajasparatrasteos.com", "Tus cajas")->subject("Orden #{$order->id} en tus cajas");
            $m->to("andrea.rios@grimorum.com", "Andrea Rios")->subject("Orden #{$order->id} en tus cajas");
            $m->to("tatiana.cardenas@grimorum.com", "Tatiana Cardenas")->subject("Orden #{$order->id} en tus cajas");
            $m->to("daniel.cardenas@grimorum.com", "Juan Cardenas")->subject("Orden #{$order->id} en tus cajas");
        });

        Mail::send('emails.exitoOrden', ['order' => $order, 'resultado' => $resultado], function ($m) use ($order) {
            $m->from('contacto@tuscajasparatrasteos.com', 'TusCajas');
            $m->to($order->email, "")->subject("Compra exitosa en tus cajas");
        });
    }
}