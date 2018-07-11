<?php

namespace App\Http\Controllers;

use App\Boke;
use App\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BokeController extends Controller
{
    public function index()
    {
        $bokes = \DB::table('bokes')
        ->join('users', 'bokes.user_id', '=', 'users.id')
        ->join('odais', 'bokes.odai_id', '=', 'odais.id')
        ->select('users.nickname','bokes.content','odais.filename','bokes.created_at')
        ->paginate(10);
        
         $user = User::first();
         
         $data = [
                'user' => $user,
                'bokes' => $bokes,
            ];

         return view('index', $data);
         
    }

public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->bokes()->create([
            'content' => $request->content,
        ]);

        return redirect()->back();
    }
    
     public function destroy($id)
    {
        $boke = \App\Boke::find($id);

        if (\Auth::user()->id === $boke->user_id) {
            $boke->delete();
        }

        return redirect()->back();
    }
    

}
