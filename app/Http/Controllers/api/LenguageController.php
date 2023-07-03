<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lenguage;

class LenguageController extends Controller
{
    public function index(){
        $lenguage = Lenguage::all();
        return response()->json(
            [
                'success' => true,
                'lenguage' => $lenguage
            ]
        );
    }
}
