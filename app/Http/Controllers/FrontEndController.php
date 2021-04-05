<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Excursiones;
use App\Models\Slide;
use App\Models\Mensaje;
use App\Models\Inicio;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function inicio(){
        $slide = Slide::all();
        $categorias = DB::select('select * from categorias');
        $excursiones = Excursiones::all()->sortByDesc('id')->take(4);
        $inicio = Inicio::find(1);
        return view('welcome')->with('slide', $slide)->with('categorias', $categorias)->with('excursiones', $excursiones)->with('inicio', $inicio);
    }


    public function excursiones(){
     
        $excursiones = Excursiones::all()->sortByDesc('id');
        $inicio = Inicio::find(1);
        return view('frontend.excursiones-todas')->with('excursiones', $excursiones)->with('inicio', $inicio);
    }


    public function excursion($id){
     
        $excursion = Excursiones::find($id);
        $inicio = Inicio::find(1);
        $galerias = DB::select('select * from galeria where excursion_id = '.$id);
        return view('frontend.excursion')->with('excursion', $excursion)->with('galerias', $galerias)->with('inicio', $inicio);
    }


    public function excursionesPorCategoria($id){
     
        $categoria = Categorias::find($id);
        $inicio = Inicio::find(1);
        $excursiones = DB::select('select * from excursiones where id_categoria = '.$id.' order by id desc');

        return view('frontend.excursiones')->with('categoria', $categoria)->with('excursiones', $excursiones)->with('inicio', $inicio);
    }

    public function mensajes(Request $request){
        $datos = request()->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'mensaje' => ['required', 'string'],
        ]);

        Mensaje::create([
            'nombre' => $datos['nombre'],
            'email' => $datos['email'],
            'mensaje' => $datos['mensaje'],
            'leido' => 'no',
        ]);
            return redirect('/');
    }
}
