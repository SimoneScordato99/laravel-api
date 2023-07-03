<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genere;

class GenereController extends Controller
{
    public function index(){
        $genere = Genere::all();
        return response()->json(
            [
                'success' => true,
                'genere' => $genere
            ]
        );
    }
}
