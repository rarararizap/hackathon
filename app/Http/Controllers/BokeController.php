<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BokeController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $bokes = bokes()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'bokes' => $bokes,
                
            ];
        }
        return view('welcome', $data);
    }


}
