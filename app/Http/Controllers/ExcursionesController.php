<?php

namespace App\Http\Controllers;

use App\Models\Excursiones;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExcursionesController extends Controller
{

    public function index()
    {
        $excursiones = Excursiones::all();
        return view('modulos.excursiones')->with('excursiones', $excursiones);
    }

 
    public function create()
    {
        $categorias = Categorias::all();
        return view('modulos.crear-excursion')->with('categorias', $categorias);
    }


    public function store(Request $request)
    {
        $rutaImg = $request['portada']->store('excursiones', 'public');
        $datos = request();
        Excursiones::create([
            'titulo' => $datos['titulo'],
            'id_categoria' => $datos['id_categoria'],
            'descripcion' => $datos['descripcion'],
            'portada' => $rutaImg
            ]);
            return redirect('excursiones');
    }


    public function edit(Excursiones $excursiones)
    {
       // dd($excursiones);
       $categorias = Categorias::all();
       return view('modulos.editar-excursion', compact('excursiones', 'categorias'));
     
    }


    public function update(Request $request, Excursiones $excursiones)
    {
        $datos = request();
        $excursiones->titulo = $datos['titulo'];
        $excursiones->descripcion = $datos['descripcion'];
        $excursiones->id_categoria = $datos['id_categoria'];

        if(request('portadaNueva')){
            Storage::delete('public/'.$excursiones->portada);
            $rutaImg = $request['portadaNueva']->store('excursiones', 'public');
            $excursiones->portada = $rutaImg;            
        }
        $excursiones->save();
        return redirect('excursiones');
    }


    public function destroy(Excursiones $excursiones)
    {
        if(Storage::delete('public/'.$excursiones->portada)){
            Excursiones::destroy($excursiones->id);        
        }
        return redirect('excursiones');
    }
    
}
