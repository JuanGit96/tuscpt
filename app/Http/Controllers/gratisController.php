<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\articles;
class gratisController extends Controller {

    public function index() 
{
    
 return view('gratis');

}


}
