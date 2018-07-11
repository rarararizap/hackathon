<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        $count_bokes = $user->bokes()->count();
        $count_favorite_bokes = $user->favorite_bokes()->count();

        return [
            'count_bokes' => $count_bokes,
            'count_favorite_bokes' => $count_favorite_bokes,
        ];
    }
}
