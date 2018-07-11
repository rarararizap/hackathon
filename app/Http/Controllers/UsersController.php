<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Boke;

use App\Odai;



class UsersController extends Controller
{
    
     public function show($id)
    {
        $user = User::find($id);
        $bokes = \DB::table('bokes')
        ->join('users', 'bokes.user_id', '=', 'users.id')
        ->join('odais', 'bokes.odai_id', '=', 'odais.id')
        ->select('users.nickname','bokes.content','odais.filename','bokes.created_at')
        ->paginate(10);
         
           $data = [
            'user' => $user,
            'bokes' => $bokes,
        ];
        
         $data += $this->counts($user);

        return view('users.show', $data);
    }
     
     
     
     public function favorites($id)
    {
        $user = User::find($id);
        $favorites = $user->favorite_bokes()->paginate(10);

        $data = [
            'user' => $user,
            'favorites' => $favorites,
        ];

        $data += $this->counts($user);

        return view('users.favorites', $data);
        
    }
}
