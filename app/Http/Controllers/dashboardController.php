<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
// use Crypt;
use App\Orders;
use App\Codepromo;
use App\Kits;
use App\articles;
use App\User;
use App\Extras;
use Redirect;
use App\Categories;
use App\Agencies;
use App\Agents;
use App\Contact;
use App\Garantias;
use App\Cajas;

class dashboardController extends Controller {

    public function index(){
    	$order = Orders::all();
    	$kits = Kits::all();
    	$article = articles::all();
    	$user = User::all();
    	$estudio = Orders::where('kit_id', '1')->count();
    	$apartamento = Orders::where('kit_id', '2')->count();
    	$casa = Orders::where('kit_id', '3')->count();
    	$ciudad = Orders::where('city', 'bogota')->where('city', 'BOGOTA')->count();
    	$ciudad1 = Orders::where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->count();
    	$ciudad2 = Orders::where('city','<>','bogota')->count();
    	$contra = Orders::where('payment', 'Contra entrega')->count();
    	$pse = Orders::where('payment', 'pse')->count();
    	$tarjeta = Orders::where('payment', 'Tarjeta de credito')->count();
    	$baloto = Orders::where('payment', 'Baloto')->count();
    	$ya = Orders::where('HORA_ENTREGA', 'lo quiero ya')->count();
    	$gratis = Orders::where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->count();
    	$antes24 = Orders::where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->count();
    	//Año
    	$estudio2017 = Orders::where('kit_id', '1')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$apartamento2017 = Orders::where('kit_id', '2')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$casa2017 = Orders::where('kit_id', '3')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$estudio2018 = Orders::where('kit_id', '1')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$apartamento2018 = Orders::where('kit_id', '2')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$casa2018 = Orders::where('kit_id', '3')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$ciudad2017 = Orders::where('city', 'bogota')->where('city', 'BOGOTA')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudad22017 = Orders::where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudad32017 = Orders::where('city','<>','bogota')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudad2018 = Orders::where('city', 'bogota')->where('city', 'BOGOTA')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$ciudad22018 = Orders::where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$ciudad32018 = Orders::where('city','<>','bogota')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$contra2017 = Orders::where('payment', 'Contra entrega')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$pse2017 = Orders::where('payment','pse')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$tarjeta2017 = Orders::where('payment','Tarjeta de credito')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$baloto2017 = Orders::where('payment', 'baloto')->where('created_at','>', '20187-01-01')->where('created_at','<', '2018-01-01')->count();
    	$contra2018 = Orders::where('payment', 'Contra entrega')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$pse2018 = Orders::where('payment','pse')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$tarjeta2018 = Orders::where('payment','Tarjeta de credito')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$baloto2018 = Orders::where('payment', 'baloto')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$ya2017 = Orders::where('HORA_ENTREGA', 'lo quiero ya')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$gratis2017 = Orders::where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$antes242017 = Orders::where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ya2018 = Orders::where('HORA_ENTREGA', 'lo quiero ya')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$gratis2018 = Orders::where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$antes242018 = Orders::where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	//Aparta Estudio
    	$ciudadApe = Orders::where('kit_id', '1')->where('city', 'bogota')->where('city', 'BOGOTA')->count();
    	$ciudad1Ape = Orders::where('kit_id', '1')->where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->count();
    	$ciudad2Ape = Orders::where('kit_id', '1')->where('city','<>','bogota')->count();
    	$contraAptoes = Orders::where('kit_id', '1')->where('payment', 'Contra entrega')->count();
    	$pseAptoes= Orders::where('kit_id', '1')->where('payment', 'pse')->count();
    	$tarjetaAptoes = Orders::where('kit_id', '1')->where('payment', 'Tarjeta de credito')->count();
    	$balotoAptoes = Orders::where('kit_id', '1')->where('payment', 'Baloto')->count();
    	$yaAptoes = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo quiero ya')->count();
    	$gratisAptoes = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->count();
    	$antes24Aptoes = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->count();
    	$ciudadAptoes2017 = Orders::where('kit_id', '1')->where('city', 'bogota')->where('city', 'BOGOTA')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudad2Aptoes2017 = Orders::where('kit_id', '1')->where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudad3Aptoes2017 = Orders::where('kit_id', '1')->where('city','<>','bogota')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudadAptoes2018 = Orders::where('kit_id', '1')->where('city', 'bogota')->where('city', 'BOGOTA')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$ciudad2Aptoes2018 = Orders::where('kit_id', '1')->where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$ciudad3Aptoes2018 = Orders::where('kit_id', '1')->where('city','<>','bogota')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$contraAptoes2017 = Orders::where('kit_id', '1')->where('payment', 'Contra entrega')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$pseAptoes2017 = Orders::where('kit_id', '1')->where('payment','pse')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$tarjetaAptoes2017 = Orders::where('kit_id', '1')->where('payment','Tarjeta de credito')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$balotoAptoes2017 = Orders::where('kit_id', '1')->where('payment', 'baloto')->where('created_at','>', '20187-01-01')->where('created_at','<', '2018-01-01')->count();
    	$contraAptoes2018 = Orders::where('kit_id', '1')->where('payment', 'Contra entrega')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$pseAptoes2018 = Orders::where('kit_id', '1')->where('payment','pse')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$tarjetaAptoes2018 = Orders::where('kit_id', '1')->where('payment','Tarjeta de credito')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$balotoAptoes2018 = Orders::where('kit_id', '1')->where('payment', 'baloto')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$yaAptoes2017 = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo quiero ya')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$gratisAptoes2017 = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$antes24Aptoes2017 = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$yaAptoes2018 = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo quiero ya')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$gratisAptoes2018 = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$antes24Aptoes2018 = Orders::where('kit_id', '1')->where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	//Apartamento
    	$ciudadApto = Orders::where('kit_id', '2')->where('city', 'bogota')->where('city', 'BOGOTA')->count();
    	$ciudad1Apto= Orders::where('kit_id', '2')->where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->count();
    	$ciudad2Apto = Orders::where('kit_id', '2')->where('city','<>','bogota')->count();
    	$contraApto = Orders::where('kit_id', '2')->where('payment', 'Contra entrega')->count();
    	$pseApto= Orders::where('kit_id', '2')->where('payment', 'pse')->count();
    	$tarjetaApto = Orders::where('kit_id', '2')->where('payment', 'Tarjeta de credito')->count();
    	$balotoApto = Orders::where('kit_id', '2')->where('payment', 'Baloto')->count();
    	$yaApto = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo quiero ya')->count();
    	$gratisApto = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->count();
    	$antes24Apto = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->count();
    	$ciudadApto2017 = Orders::where('kit_id', '2')->where('city', 'bogota')->where('city', 'BOGOTA')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudad2Apto2017 = Orders::where('kit_id', '2')->where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudad3Apto2017 = Orders::where('kit_id', '2')->where('city','<>','bogota')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$ciudadApto2018 = Orders::where('kit_id', '2')->where('city', 'bogota')->where('city', 'BOGOTA')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$ciudad2Apto2018 = Orders::where('kit_id', '2')->where('city','medellin')->Where('city', 'Medellin')->Where('city', 'MEDELLIN')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$ciudad3Apto2018 = Orders::where('kit_id', '2')->where('city','<>','bogota')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$contraApto2017 = Orders::where('kit_id', '2')->where('payment', 'Contra entrega')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$pseApto2017 = Orders::where('kit_id', '2')->where('payment','pse')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$tarjetaApto2017 = Orders::where('kit_id', '2')->where('payment','Tarjeta de credito')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$balotoApto2017 = Orders::where('kit_id', '2')->where('payment', 'baloto')->where('created_at','>', '20187-01-01')->where('created_at','<', '2018-01-01')->count();
    	$contraApto2018 = Orders::where('kit_id', '2')->where('payment', 'Contra entrega')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$pseApto2018 = Orders::where('kit_id', '2')->where('payment','pse')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$tarjetaApto2018 = Orders::where('kit_id', '2')->where('payment','Tarjeta de credito')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$balotoApto2018 = Orders::where('kit_id', '2')->where('payment', 'baloto')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$yaApto2017 = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo quiero ya')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$gratisApto2017 = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$antes24Apto2017 = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->where('created_at','>', '2017-01-01')->where('created_at','<', '2018-01-01')->count();
    	$yaApto2018 = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo quiero ya')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$gratisApto2018 = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo espero las 48 horas gratis')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
    	$antes24Apto2018 = Orders::where('kit_id', '2')->where('HORA_ENTREGA', 'lo quiero antes de 24 horas')->where('created_at','>', '2018-01-01')->where('created_at','<', '2019-01-01')->count();
 		return view('dashboard.index', [
 			'order' => $order,
 			'kits' => $kits,
 			'article' => $article,
 			'user' => $user,
 			'estudio' => $estudio,
 			'apartamento' => $apartamento,
 			'casa' => $casa,
 			'ciudad' => $ciudad,
 			'ciudad1' => $ciudad1,
 			'ciudad2' => $ciudad2,
 			'contra' => $contra,
 			'pse' => $pse,
 			'tarjeta' => $tarjeta,
 			'baloto' => $baloto,
 			'ya' => $ya,
 			'gratis' => $gratis,
 			'antes24' => $antes24,
 			'estudio2017' => $estudio2017,
 			'apartamento2017' => $apartamento2017,
 			'casa2017' => $casa2017,
 			'estudio2018' => $estudio2018,
 			'apartamento2018' => $apartamento2018,
 			'casa2018' => $casa2018,
 			'ciudad2017' => $ciudad2017,
 			'ciudad22017' => $ciudad22017,
 			'ciudad32017' => $ciudad32017,
 			'ciudad2018' => $ciudad2018,
 			'ciudad22018' => $ciudad22018,
 			'ciudad32018' => $ciudad32018,
 			'contra2017' => $contra2017,
 			'tarjeta2017' => $tarjeta2017,
 			'pse2017' => $pse2017,
 			'baloto2017' => $baloto2017,
 			'contra2018' => $contra2018,
 			'tarjeta2018' => $tarjeta2018,
 			'pse2018' => $pse2018,
 			'baloto2018' => $baloto2018,
 			'ya2017' => $ya2017,
 			'gratis2017' => $gratis2017,
 			'antes242017' => $antes242017,
 			'ya2018' => $ya2018,
 			'gratis2018' => $gratis2018,
 			'antes242018' => $antes242018,
 			'ciudadApe' => $ciudadApe,
 			'ciudad1Ape' => $ciudad1Ape,
 			'ciudad2Ape' => $ciudad2Ape,
 			'contraAptoes' => $contraAptoes,
 			'pseAptoes' => $pseAptoes,
 			'tarjetaAptoes' => $tarjetaAptoes,
 			'balotoAptoes' => $balotoAptoes,
 			'yaAptoes' => $yaAptoes,
 			'gratisAptoes' => $gratisAptoes,
 			'antes24Aptoes' => $antes24Aptoes,
 			'ciudadAptoes2017' => $ciudadAptoes2017,
 			'ciudad2Aptoes2017' => $ciudad2Aptoes2017,
 			'ciudad3Aptoes2017' => $ciudad3Aptoes2017,
 			'ciudadAptoes2018' => $ciudadAptoes2018,
 			'ciudad2Aptoes2018' => $ciudad2Aptoes2018,
 			'ciudad3Aptoes2018' => $ciudad3Aptoes2018,
 			'contraAptoes2017' => $contraAptoes2017,
 			'tarjetaAptoes2017' => $tarjetaAptoes2017,
 			'pseAptoes2017' => $pseAptoes2017,
 			'balotoAptoes2017' => $balotoAptoes2017,
 			'contraAptoes2018' => $contraAptoes2018,
 			'tarjetaAptoes2018' => $tarjetaAptoes2018,
 			'pseAptoes2018' => $pseAptoes2018,
 			'balotoAptoes2018' => $balotoAptoes2018,
 			'yaAptoes2017' => $yaAptoes2017,
 			'gratisAptoes2017' => $gratisAptoes2017,
 			'antes24Aptoes2017' => $antes24Aptoes2017,
 			'yaAptoes2018' => $yaAptoes2018,
 			'gratisAptoes2018' => $gratisAptoes2018,
 			'antes24Aptoes2018' => $antes24Aptoes2018,
 			'ciudadApto' => $ciudadApto,
 			'ciudad1Apto' => $ciudad1Apto,
 			'ciudad2Apto' => $ciudad2Apto,
 			'contraApto' => $contraApto,
 			'pseApto' => $pseApto,
 			'tarjetaApto' => $tarjetaApto,
 			'balotoApto' => $balotoApto,
 			'yaApto' => $yaApto,
 			'gratisApto' => $gratisApto,
 			'antes24Apto' => $antes24Apto,
 			'ciudadApto2017' => $ciudadApto2017,
 			'ciudad2Apto2017' => $ciudad2Apto2017,
 			'ciudad3Apto2017' => $ciudad3Apto2017,
 			'ciudadApto2018' => $ciudadApto2018,
 			'ciudad2Apto2018' => $ciudad2Apto2018,
 			'ciudad3Apto2018' => $ciudad3Apto2018,
 			'contraApto2017' => $contraApto2017,
 			'tarjetaApto2017' => $tarjetaApto2017,
 			'pseApto2017' => $pseApto2017,
 			'balotoApto2017' => $balotoApto2017,
 			'contraApto2018' => $contraApto2018,
 			'tarjetaApto2018' => $tarjetaApto2018,
 			'pseApto2018' => $pseApto2018,
 			'balotoApto2018' => $balotoApto2018,
 			'yaApto2017' => $yaApto2017,
 			'gratisApto2017' => $gratisApto2017,
 			'antes24Apto2017' => $antes24Apto2017,
 			'yaApto2018' => $yaApto2018,
 			'gratisApto2018' => $gratisApto2018,
 			'antes24Apto2018' => $antes24Apto2018

 		]);
	}
	public function ordenes()
	{
	    $order = Orders::orderBy('id','DESC')->paginate(10);

		return view('dashboard.ordenes')->with('order', $order);
	}
	public function verOrden($id)
	{
		$orden = Orders::find($id);
		return view('dashboard.ordenes.ver')->with('orden', $orden);
	}
	public function kits()
	{
		$kits = Kits::paginate(10);
		return view('dashboard.kits.index')->with('kits', $kits);
	}
	public function nuevoKit()
	{
		return view('dashboard.kits.nuevo');

	}
	public function eliminarKit($id)
	{
		$kit = Kits::find($id);
		if ($kit->delete()) {
			return Redirect::to('dashboard/kits');
		}

	}

    public function codepromo()
    {
        $codepromo = Codepromo::orderBy('id','DESC')->paginate(10);
        return view('dashboard.promociones')->with('codepromo', $codepromo);
    }

    public function deletecode($id)
    {
        $codepromo = Codepromo::find($id);
        if ($codepromo->delete()) {
            return "borrado";
        }
    }

    public function showedit($id)
    {
        $codepromo = Codepromo::find($id);

        return $codepromo;
    }

    public function updatepromo(Request $request, $id)
    {
        $codepromo = Codepromo::find($id);
        $codepromo->name = $request->input('name_edit');
        $codepromo->code = $request->input('code_edit');
        $codepromo->discount = $request->input('discount_edit');
        if ($codepromo->save()) {
            return "guardado";
        }
        
    }
	public function agregarKit(Request $request)
	{
		$kits = new Kits();
		if ($file = $request->file('img')) {
                // Subir imagenes en la carpeta publica image/provider
                $file     = $request->file('img');
                $nameComp = 'img_' . time() . '.' . $file->getClientOriginalExtension();
                $path     = public_path() . '/img/';
                $file->move($path, $nameComp);
        }
		$kits->name = $request->input('name');
		$kits->tags = $request->input('tags');
		$kits->price = $request->input('price');
		$kits->description = $request->get('description');
		$kits->contents = $request->get('contents');
		$kits->state = $request->get('estado');
		$kits->type = $request->get('tipo');
		$kits->picture = $nameComp;
		// dd($kits);
		// exit;

		if ($kits->save()) {
			return Redirect::to('dashboard/kits');
		}
	}
	public function editarKit($id)
	{
		$model = Kits::find($id);
		return view('dashboard.kits.editar')->with('model', $model);
	}
	
	public function actualizarKit(Request $request, $id)
	{
        $kit = Kits::find($id);
		
		if ($file = $request->file('img')) {
                // Subir imagenes en la carpeta publica img
                $file     = $request->file('img');
                $nameComp = 'img_' . time() . '.' . $file->getClientOriginalExtension();
                $path     = public_path() . '/img/';
                $file->move($path, $nameComp);
				$kit->picture = $nameComp;
        }

		$kit->name = $request->input('name');
		$kit->tags = $request->input('tags');
		$kit->price = $request->input('price');
		$kit->description = $request->get('description');
		$kit->contents = $request->get('contents');
		$kit->state = $request->get('estado');
		$kit->type = $request->get('tipo');
		
		if ($kit->save()) {
			return Redirect::to('dashboard/kits');
			Session::flash('mensaje', 'Mensaje de prueba');
		}
	}
	public function extras()
	{
		$extras = Extras::paginate(10);
		return view('dashboard.extras.index')->with('extras', $extras);
	}
	public function eliminarExtra($id)
	{
		$extra = Extras::find($id);
		if ($extra->delete()) {
			return Redirect::to('dashboard/extras');
		}
	}
	public function articulos()
	{
		$article = articles::all();
		return view('dashboard.articulos.index',[
			'article' => $article,
		]);
	}
	public function nuevoArticulo()
	{
		$categories = Categories::All();
		// dd($categories);
		return view('dashboard.articulos.nuevo', [
			'categories' => $categories,
		]);
	}
	public function agregarArticulo(Request $request)
	{
		
		$article = new articles();
		if ($file = $request->file('img')) {
                // Subir imagenes en la carpeta publica image/provider
                $file     = $request->file('img');
                $nameComp = 'img_' . time() . '.' . $file->getClientOriginalExtension();
                $path     = public_path() . '/img/';
                $file->move($path, $nameComp);
        }
		$article->title = $request->input('title');
		$article->description = $request->get('description');
		$article->state = $request->get('estado');
		$article->picture = $nameComp;
		$article->id_categoria = $request->categoria;
		

		if ($article->save()) {
			return Redirect::to('dashboard/articulos');
		}

	}

    public function createpromo(Request $request)
    {
        $promo = new Codepromo();
        $promo->name = $request->get('name');
        $promo->code = $request->get('code');
        $promo->discount = $request->get('discount');
        if ($promo->save()) {
            # code...
        return "registrado" ;

        }

    }
	public function editarArticulo($id)
	{
		$categories = Categories::All();
		$model = articles::find($id);
		return view('dashboard.articulos.editar')->with('model', $model)->with('categories', $categories);

	}
	public function actualizarArticulo(Request $request, $id)
	{

		$article = articles::find($id);
		if ($file = $request->file('img')) {
                $file     = $request->file('img');
                $nameComp = 'img_' . time() . '.' . $file->getClientOriginalExtension();
                $path     = public_path() . '/img/';
                $file->move($path, $nameComp);
			$article->picture = $nameComp;
        }
		$article->title = $request->input('title');
		$article->description = $request->get('description');
		$article->state = $request->get('estado');
		$article->id_categoria = $request->categoria;
		// dd($article);
		// exit;

		if ($article->save()) {
			return Redirect::to('dashboard/articulos');
		}
		
	}
	public function eliminarArticulo($id)
	{
		$extra = articles::find($id);
		if ($extra->delete()) {
			return Redirect::to('dashboard/articulos');
		}
	}

	public function galeria()
	{
		
		return view('dashboard.galeria');
	}
	public function agencias()
	{
		$agencias = Agencies::paginate(10);
		return view('dashboard.agencias.index')->with('agencias', $agencias);
	}
	public function agregarAgencia(Request $request){
		$agencias = new Agencies();
		$agencias->name = $request->get('name');
		$agencias->description = $request->get('description');
		$agencias->code = $request->get('code');
		$agencias->comision = $request->get('comision');

		if ($agencias->save()) {
			return Redirect::to('dashboard/agencias');
		}
	}
	public function editarAgencia($id)
	{
		$agencia = Agencies::find($id);
		return view('dashboard.agencias.editar')
			->with('agencia', $agencia);
	}
	public function actualizarAgencia(Request $request, $id)
	{
		$agencia = Agencies::find($id);
		$agencia->name = $request->get('name');
		$agencia->description = $request->get('description');
		$agencia->code = $request->get('code');
		$agencia->comision = $request->get('comision');

		if ($agencia->save()) {
			return Redirect::to('dashboard/agencias');
		}
	}
	public function eliminarAgencia($id)
	{
		$kit = Agencies::find($id);
		if ($kit->delete()) {
			return Redirect::to('dashboard/agencias');
		}
	}
	public function agentes()
	{
		$agentes = Agents::paginate(10);
		return view('dashboard.agentes.index')->with('agentes', $agentes);
	}
	public function nuevoAgente()
	{
		$usuarios = User::all();
		$agencias = Agencies::all();
		return view('dashboard.agentes.nuevo',[
			'usuarios' => $usuarios,
			'agencias' => $agencias
		]);
	}
	public function agregarAgente(Request $request){
		$agentes = new Agents();
		$agentes->cedula = $request->get('cedula');
		$agentes->cel = $request->get('cel');
		$agentes->code = $request->get('code');
		$agentes->comision = $request->get('comision');
		$agentes->descuento = $request->get('descuento');
		$agentes->user_id = $request->get('user_id');
		$agentes->agencie_id = $request->get('agencie_id');

		if ($agentes->save()) {
			return Redirect::to('dashboard/agentes');
		}
	}
	public function editarAgente($id)
	{
		$agente = Agents::find($id);
		$usuarios = User::all();
		$agencias = Agencies::all();
		return view('dashboard.agentes.editar',[
			'agente' => $agente,
			'usuarios' => $usuarios,
			'agencias' => $agencias
		]);
	}
	public function actualizarAgente(Request $request, $id)
	{
		$agentes = Agents::find($id);
		$agentes->cedula = $request->get('cedula');
		$agentes->cel = $request->get('cel');
		$agentes->code = $request->get('code');
		$agentes->comision = $request->get('comision');
		$agentes->descuento = $request->get('descuento');
		$agentes->user_id = $request->get('user_id');
		$agentes->agencie_id = $request->get('agencie_id');

		if ($agentes->save()) {
			return Redirect::to('dashboard/agentes');
		}
	}
	public function eliminarAgente($id)
	{
		$kit = Agents::find($id);
		if ($kit->delete()) {
			return Redirect::to('dashboard/agentes');
		}
	}
	public function contactos()
	{
		$contactos = Contact::all();
		return view('dashboard.contactos.index')->with('contactos', $contactos);
	}
	public function usuarios()
	{
		$usuarios = User::paginate(10);
		return view('dashboard.usuarios.index')->with('usuarios', $usuarios);
	}
	public function nuevoUsuario()
	{
		$usuarios = User::all();
		$agencias = Agencies::all();
		return view('dashboard.usuarios.nuevo',[
			'usuarios' => $usuarios,
			'agencias' => $agencias
		]);
	}
	public function agregarUsuario(Request $request){
		$usuarios = new User();
		$usuarios->name = $request->get('name');
		$usuarios->email = $request->get('email');
		$usuarios->password = bcrypt($request->get('password'));

		if ($usuarios->save()) {
			return Redirect::to('dashboard/usuarios');
		}
	}
	public function editarUsuario($id)
	{
		$usuarios = User::find($id);
		return view('dashboard.usuarios.editar',[
			'usuarios' => $usuarios
		]);
	}
	public function actualizarUsuario(Request $request, $id)
	{
		$usuarios = User::find($id);
		$usuarios->name = $request->name('name');
		$usuarios->email = $request->get('email');
		$usuarios->password = bcrypt($request->get('password'));

		if ($usuarios->save()) {
			return Redirect::to('dashboard/usuarios');
		}
	}
	public function eliminarUsuario($id)
	{
		$kit = User::find($id);
		if ($kit->delete()) {
			return Redirect::to('dashboard/usuarios');
		}
	}

    public function creargarantia(Request $request){

        $garantia = new Garantias();
        $garantia->orders_id = $request->get('orden_id');
        $garantia->cajas = $request->get('cajas');
        
        if($garantia->save()){
            return Redirect::to('dashboard/ordenes');
        }

    }

     public function cajas(){
        $cajas = Cajas::all();
     return view('dashboard/cajas')->with('cajas', $cajas);

     }

     public function crearordencaja(Request $request){

        $cajas = new Cajas();
        $cajas->name = $request->get('name');
        $cajas->document = $request->get('document');
        $cajas->email = $request->get('email');
        $cajas->phone = $request->get('phone');
        $cajas->city = $request->get('city');
        $cajas->cajas = $request->get('cajas');
        $cajas->pago = $request->get('pago');


        if($cajas->save()){
            return Redirect::to('dashboard/cajas');
        }
     }
}