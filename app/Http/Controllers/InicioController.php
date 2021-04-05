<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class InicioController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }

    public function index()
    {
        $inicio = Inicio::find(1);
        return view('modulos.inicio')->with('inicio', $inicio);
    }


    public function logo(Request $request)
    {
        $inicio = Inicio::find(1);
        if(request('logo')){
            Storage::delete('public/'.$inicio->logo);
            $rutaImg = $request['logo']->store('/', 'public');
            $inicio->logo = $rutaImg;

        }
        $inicio->save();
        return redirect('inicio');
    }

    public function datosGenerales(Request $request)
    {
        $datos = request();
        $datosGenerales = Inicio::find(1);
        $datosGenerales -> nombre = $datos['nombre'];
        $datosGenerales -> telefono = $datos['telefono'];
        $datosGenerales -> email = $datos['email'];
        $datosGenerales -> direccion = $datos['direccion'];

        $datosGenerales->save();
        return redirect('inicio');
    }
     
}



    

 
