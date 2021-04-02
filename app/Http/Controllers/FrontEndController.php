<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class FrontEndController extends Controller
{
    public function inicio(){
        $slide = Slide::all();

        return view('frontend.inicio')->with('slide', $slide);
    }
}
