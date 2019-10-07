<?php
use App\Agents;
use App\articles;
use App\Categories;
use App\Contact;
use App\Orders;


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */


Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'WelcomeController@index');




	Route::get('/sitemap', function () {
		return view('sitemap');

	});
	Route::get('/dashboard', 'dashboardController@index')->middleware('auth');
	Route::get('/dashboard/galeria', 'dashboardController@galeria')->middleware('auth');
	Route::get('/dashboard/ordenes', 'dashboardController@ordenes')->middleware('auth');
	Route::get('/dashboard/articulos', 'dashboardController@articulos')->middleware('auth');

	Route::post('/dashboard/crearordencaja', 'dashboardController@crearordencaja')->middleware('auth');

	Route::get('/dashboard/cajas', 'dashboardController@cajas')->middleware('auth');

	Route::get('/dashboard/articulos/nuevo', 'dashboardController@nuevoArticulo')->middleware('auth');

	Route::get('/dashboard/kits', 'dashboardController@kits')->middleware('auth');

	Route::get('/dashboard/kits/nuevo', 'dashboardController@nuevoKit')->middleware('auth');

	Route::get('/dashboard/extras', 'dashboardController@extras')->middleware('auth');
	
	Route::get('/dashboard/promociones', 'dashboardController@codepromo')->middleware('auth');

	Route::post('/dashboard/articulos/agregar', 'dashboardController@agregarArticulo')->middleware('auth');

	Route::post('/dashboard/kits/agregar', 'dashboardController@agregarKit')->middleware('auth');

	Route::post('/dashboard/promociones/createpromo', 'dashboardController@createpromo')->middleware('auth');

	Route::get('/dashboard/promociones/show/{id}', 'dashboardController@showedit')->middleware('auth');
	
	Route::put('/dashboard/promociones/editar/{id}', 'dashboardController@updatepromo')->middleware('auth');

	Route::get('/dashboard/promociones/delete/{id}', [
		'uses' => 'dashboardController@deletecode',
	])->middleware('auth');


	Route::get('/dashboard/indicadoresgenerales', function () {
		return view('dashboard.indicadoresgenerales');
	})->middleware('auth');

	// =============================
	// agencias
	// =============================
	Route::post('/dashboard/agencias/agregar', 'dashboardController@agregarAgencia')->middleware('auth');

	Route::get('/dashboard/agencias', 'dashboardController@agencias')->middleware('auth');

	Route::get('/dashboard/agencias/nuevo', function () {
		return view('dashboard.agencias.nuevo');
	})->middleware('auth');

	Route::get('/dashboard/agencias/editar/{id}', [
		'uses' => 'dashboardController@editarAgencia',
	])->middleware('auth');

	Route::post('/dashboard/agencias/actualizar/{id}', [
		'uses' => 'dashboardController@actualizarAgencia',
	])->middleware('auth');

	Route::get('/dashboard/agencias/delete/{id}', [
		'uses' => 'dashboardController@eliminarAgencia',
	])->middleware('auth');

	// =============================

	// =============================
	// agentes
	// =============================
	Route::post('/dashboard/agentes/agregar', 'dashboardController@agregarAgente')->middleware('auth');

	Route::get('/dashboard/agentes', 'dashboardController@agentes')->middleware('auth');

	Route::get('/dashboard/agentes/nuevo', 'dashboardController@nuevoAgente')->middleware('auth');

	Route::get('/dashboard/agentes/editar/{id}', [
		'uses' => 'dashboardController@editarAgente',
	])->middleware('auth');

	Route::post('/dashboard/agentes/actualizar/{id}', [
		'uses' => 'dashboardController@actualizarAgente',
	])->middleware('auth');

	Route::get('/dashboard/agentes/delete/{id}', [
		'uses' => 'dashboardController@eliminarAgente',
	])->middleware('auth');

	// =============================

	// =============================
	// usuarios
	// =============================
	Route::post('/dashboard/usuarios/agregar', 'dashboardController@agregarUsuario')->middleware('auth');

	Route::get('/dashboard/usuarios', 'dashboardController@usuarios')->middleware('auth');

	Route::get('/dashboard/usuarios/nuevo', 'dashboardController@nuevoUsuario')->middleware('auth');

	Route::get('/dashboard/usuarios/editar/{id}', [
		'uses' => 'dashboardController@editarUsuario',
	])->middleware('auth');

	Route::post('/dashboard/usuarios/actualizar/{id}', [
		'uses' => 'dashboardController@actualizarUsuario',
	])->middleware('auth');

	Route::get('/dashboard/usuarios/delete/{id}', [
		'uses' => 'dashboardController@eliminarUsuario',
	])->middleware('auth');

	// =============================

	Route::get('/dashboard/contactos', 'dashboardController@contactos')->middleware('auth');

	Route::get('/dashboard/articulos/editar/{id}', [
		'uses' => 'dashboardController@editarArticulo',
	])->middleware('auth');

	Route::get('/dashboard/ordenes/ver/{id}', [
		'uses' => 'dashboardController@verOrden',
	])->middleware('auth');

	Route::post('/creargarantia', [
		'uses' => 'dashboardController@creargarantia',
	])->middleware('auth');

	Route::get('/dashboard/kits/editar/{id}', [
		'uses' => 'dashboardController@editarKit',
	])->middleware('auth');

	Route::get('/dashboard/kits/delete/{id}', [
		'uses' => 'dashboardController@eliminarKit',
	])->middleware('auth');

	Route::post('/dashboard/kits/actualizar/{id}', [
		'uses' => 'dashboardController@actualizarKit',
	])->middleware('auth');

	Route::get('/dashboard/extras/delete/{id}', [
		'uses' => 'dashboardController@eliminarExtra',
	])->middleware('auth');

	Route::get('/dashboard/articulos/delete/{id}', [
		'uses' => 'dashboardController@eliminarArticulo',
	])->middleware('auth');

	Route::resource('/dashboard/articulos/actualizar', 'dashboardController@actualizarArticulo');

	Route::post('/dashboard/articulos/actualizar/{id}', [
		'uses' => 'dashboardController@actualizarArticulo',
	])->middleware('auth');

	Route::auth();
	Route::post('/user/0/save', 'Auth\AuthController@register');
	Route::get('/order/payment', 'OrderController@payment');
	Route::post('/order/response', 'OrderController@response');
	Route::get('/articulos/index', 'articulosController@index');
	Route::post('/order', 'OrderController@store');

	Route::resource('articles', 'articulosController@show');
	Route::resource('gratis', 'gratisController@index');
	Route::resource('pedido', 'pedidoController@index');

	Route::resource('kit-apartamentos', 'apartamentoController@index');
	Route::resource('kit-apartaestudios', 'apartaestudiosController@index');
	Route::resource('kit-casas', 'casasController@index');
	Route::resource('kit-armado', 'kitArmadoController@index');
	Route::resource('arma-tu-kit', 'kitArmadoController@ArmaTuKitIndex');
	Route::resource('kit-pequena', 'pequenaController@index');
	Route::resource('kit-mediana', 'medianaController@index');
	Route::resource('kit-grande', 'grandeController@index');

	Route::get('/consulta', function () {
		$code = Input::get('code');
		$resultado = Agents::where('code', '=', $code)->get();
		if (count($resultado) == 1) {
			return Response::json('Código aceptado por la plataforma');
		} else {
			return Response::json('Ingrese un código valido');
		}
	});
	Route::get('/consultap', function () {
		$correo = Input::get('correo');
		$resultado = Orders::where('email', '=', $correo)->orderBy('id', 'desc')->first();
		if (count($resultado) == 1) {
			return Response::json(array(
				'response' => true,
				'data' => $resultado,
			)
			);
		} else {
			return Response::json(array(
				'response' => false,
				'data' => $correo,
			)
			);
		}
	});
	Route::post('/dashboard/galeria/add', function (Request $request) {
		// if ($file = Input::file('img')) {
		// Subir imagenes en la carpeta publica image/provider
		$file = Input::file('file');
		// dd($file);
		$nameComp = 'img_' . time() . '.' . $file->getClientOriginalExtension();
		$path = public_path() . '/img/';
		$file->move($path, $nameComp);
		return Redirect::to('/dashboard/galeria');
		// }
		// return Redirect::to('dashboard/galeria');

	});

	Route::get('/noticias', function () {
		$categories = Categories::All()->take(3);
		if (Input::get('todas')) {
			$arti = articles::where(['state' => 'act'])->orderBy('id', 'desc')->take(4)->get();
			return Response::json($arti);
		} else if ($id = Input::get('cargarMas')) {
			$arti = articles::where('state', 'act')->where('id', '<', $id)->orderBy('id', 'desc')->take(4)->get();
			if (count($arti) > 0) {
				return Response::json(array(
					"response" => true,
					"arti" => $arti,
				)
				);
			} else {
				return Response::json(array(
					"response" => false,
				));
			}
		}
		if ($id = Input::get('ID')) {
			$cate = Input::get('ID_CATEGORIA');
			$arti = articles::where([['state', 'act'], ['id', '<', $id], ['id_categoria', '=', $cate]])->orderBy('id', 'desc')->take(4)->get();
			if (count($arti) > 0) {
				return Response::json(array(
					"response" => true,
					"arti" => $arti,
				)
				);
			} else {
				return Response::json(array(
					"response" => false,
				));
			}
		} else if ($categoria = Input::get('categoria')) {
			$arti = articles::where(['id_categoria' => $categoria, 'state' => 'act'])->take(4)->orderBy('id', 'DESC')->get();
			return Response::json($arti);
		}
		return view('/noticias')
			->with('categories', $categories)
			->with('whatsappLink', "https://api.whatsapp.com/send?phone=573102082969&text=Hola tengo una duda");
	});

	Route::get('/contact', function () {
		return view('contact')
            ->with('whatsappLink', "https://api.whatsapp.com/send?phone=573102082969&text=Hola tengo una duda");

    });
	Route::post('/contact/add', function () {

		$fecha = date('Y-m-d');
		$contact = new Contact;
		$contact->nombre = Input::get('nombre');
		$contact->email = Input::get('email');
		$contact->descripcion = Input::get('descripcion');
		$contact->fecha_envio = $fecha;

		if ($contact->save()) {
			Mail::send('emails.contact', ['contact' => $contact], function ($message) {
				$message->from('contacto@tuscajasparatrasteos.com', 'contacto@tuscajasparatrasteos.com');
				$message->to('contacto@tuscajasparatrasteos.com');
				$message->subject('Formulario contactanos');
			});
			return Response::json('Gracias por contactarnos.');

		}
	});

});
