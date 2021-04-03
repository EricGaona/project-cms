<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoriasController extends Controller
{
   
    public function index()
    {
        $categorias = Categorias::all();
        return view('modulos.categorias')->with('categorias', $categorias);
    }


    public function store(Request $request)
    {      
        Categorias::create(['nombre' => request('nombre')]);
        return redirect('categorias');
    }


    public function update(Request $request, Categorias $categorias)
    {
        
       DB::table('categorias')->where('id', request('id'))->update(['nombre' => request('nombre')]);
       return redirect('categorias');
    }


    public function destroy($id)
    {
        DB::table('categorias')->whereId($id)->delete();
        return redirect('categorias');
    }
}
