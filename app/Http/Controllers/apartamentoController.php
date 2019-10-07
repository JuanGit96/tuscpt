<?php

namespace App\Http\Controllers;

use App\Http\Core\isHoliday;
use App\Http\Core\TipoDispositivo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class apartamentoController extends Controller {

    use isHoliday;

    use TipoDispositivo;


    public function index() 
    {
        $isHoliday = $this->isHoliday();

        $isWeekend = $this->isWeekend();

        $whatsappLink = $this->whatsapLink();


        return view('kit-apartamentos',compact('isHoliday','isWeekend','whatsappLink'));

    }


}