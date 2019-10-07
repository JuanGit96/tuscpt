<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class pequenaController extends Controller {

    public function index() 
{
    
 return view('kit-pequena');

}


}