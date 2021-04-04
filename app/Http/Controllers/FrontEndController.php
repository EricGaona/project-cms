<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Excursiones;
use Illuminate\Http\Request;
use App\Models\Slide;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function inicio(){
        $slide = Slide::all();
        $categorias = DB::select('select * from categorias');
        $excursiones = Excursiones::all()->sortByDesc('id')->take(4);
        return view('frontend.inicio')->with('slide', $slide)->with('categorias', $categorias)->with('excursiones', $excursiones);
    }

    public function excursiones(){
     
        $excursiones = Excursiones::all()->sortByDesc('id');
        return view('frontend.excursiones-todas')->with('excursiones', $excursiones);
    }

    public function excursion($id){
     
        $excursion = Excursiones::find($id);
        return view('frontend.excursion')->with('excursion', $excursion);
    }


    public function excursionesPorCategoria($id){
     
        $categoria = Categorias::find($id);
        $excursiones = DB::select('select * from excursiones where id_categoria = '.$id.' order by id desc');


        return view('frontend.excursiones')->with('categoria', $categoria)->with('excursiones', $excursiones);
    }
}
