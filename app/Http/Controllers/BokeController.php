<?php

namespace App\Http\Controllers;

use App\Boke;
use App\User;
use Illuminate\Http\Request;

class BokeController extends Controller
{
    public function index()
    {
        $bokes = \DB::table('bokes')
        ->join('users', 'bokes.user_id', '=', 'users.id')
        ->join('odais', 'bokes.odai_id', '=', 'odais.id')
        ->select('users.nickname','bokes.content','odais.filename')
        ->get();
        
        

         return view('index', ['bokes' =>$bokes] );
    }

    
}
