<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Odai;

class OdaiController extends Controller
{
      public function index()
    {
        $odais = Odai::all();

         return view('odai',['odais'=>$odais]);
    }
}
