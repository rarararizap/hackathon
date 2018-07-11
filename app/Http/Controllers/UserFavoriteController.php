<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
     public function store(Request $request, $bokeId)
    {
        \Auth::user()->favorite($bokeId);
        return redirect()->back();
    }

    public function destroy($bokeId)
    {
        \Auth::user()->unfavorite($bokeId);
        return redirect()->back();
    }
}
