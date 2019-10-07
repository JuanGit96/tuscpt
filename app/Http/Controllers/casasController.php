<?php

namespace App\Http\Controllers;

use App\Http\Core\isHoliday;
use App\Http\Controllers\Controller;
use App\Http\Core\TipoDispositivo;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;


class casasController extends Controller {

    use isHoliday;

    use TipoDispositivo;


    public function index() 
    {
        $isHoliday = $this->isHoliday();

        $isWeekend = $this->isWeekend();

        $whatsappLink = $this->whatsapLink();

        return view('kit-casas',compact('isHoliday','isWeekend','whatsappLink'));
    }


}