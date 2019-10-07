<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Core\TipoDispositivo;

class WelcomeController extends Controller
{
    use TipoDispositivo;

    public function index()
    {
        $whatsappLink = $this->whatsapLink();

        return view('welcome',compact('whatsappLink'));
    }
}
