<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function inicio(){
        $slide = Slide::all();
        $categorias = DB::select('select * from categorias');
        return view('frontend.inicio')->with('slide', $slide)->with('categorias', $categorias);
    }
}
