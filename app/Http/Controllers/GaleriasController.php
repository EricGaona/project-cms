<?php

namespace App\Http\Controllers;

use App\Models\Galerias;
use Illuminate\Http\Request;
use App\Models\Excursiones;
use Illuminate\Support\Facades\Storage;

class GaleriasController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }

    public function create($id)
    {
        $excursion = Excursiones::find($id);
        $galerias = Galerias::all()->where('excursion_id', $id);
            return view('modulos.galeria')->with('excursion', $excursion)->with('galerias', $galerias);
        }

 
    public function store(Request $request, $id)
    {
       $excursion = Excursiones::find($id);
       $rutaImg = $request['imagen']->store('galeria-'.$excursion->titulo, 'public');
       
       Galerias::create([
                        'excursion_id' => $excursion->id,
                        'imagen' => $rutaImg
       ]);
       return redirect('galeria/'.$excursion->id);
    }


    public function destroy( $id)
    {
       $galeria = Galerias::find($id);
       if(Storage::delete('public/'.$galeria->imagen)){
            Galerias::destroy($id);
       }
       return redirect('galeria/'.$galeria->excursion_id);
    }
}
