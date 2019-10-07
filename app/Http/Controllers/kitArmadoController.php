<?php

namespace App\Http\Controllers;

use App\Http\Core\isHoliday;
use App\Http\Core\TipoDispositivo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class kitArmadoController extends Controller {

    use isHoliday;

    use TipoDispositivo;


    public function index()
    {
        return view('kit-armado');
    }

    public function ArmaTuKitIndex()
    {

        $isHoliday = $this->isHoliday();

        $isWeekend = $this->isWeekend();

        $whatsappLink = $this->whatsapLink();


        return view('arma-tu-kit',compact('isHoliday','isWeekend','whatsappLink'));

    }


}