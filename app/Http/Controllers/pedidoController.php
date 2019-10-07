<?php

namespace App\Http\Controllers;

use App\Http\Core\TipoDispositivo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
class pedidoController extends Controller {

    use TipoDispositivo;

    public function index() 
    {

        $whatsappLink = $this->whatsapLink();

        return view('estado-de-tu-pedido',compact('whatsappLink'));
    }


}