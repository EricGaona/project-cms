<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class SlideController extends Controller
{
  
    public function index()
    {
        $slide = DB::select('select * from slide');
        return view('modulos.slide')->with('slide', $slide);
    }

    public function store(Request $request)
    {
        $rutaImg = $request['imagen']->store('slide', 'public');
        $datos = request()->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:255'],
            'imagen' => ['required', 'image'],
        ]);
        DB::table('slide')->insert(['titulo' => $datos["titulo"],
                                    'descripcion' => $datos["descripcion"],
                                    'imagen' => $rutaImg ]);
        return redirect('slide');
    }
   

    public function destroy($id)
    {
        $slide = Slide::find($id);
        if(Storage::delete('public/'.$slide->imagen)){
            Slide::destroy($id);
        }      
        return redirect('slide');
    }
}
