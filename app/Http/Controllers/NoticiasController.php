<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Categories;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Core\TipoDispositivo;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class NoticiasController extends Controller
{
    use TipoDispositivo;

    public function index()
    {
        $whatsappLink = $this->whatsapLink();

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
            ->with('whatsappLink', $whatsappLink);
    }
}
