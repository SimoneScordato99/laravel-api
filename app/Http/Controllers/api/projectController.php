<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Genere;
use App\Models\Lenguage;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(){
        $tutto = Project::with(['generes', 'lenguages'])->get();
        // $books = Book::with(['author', 'publisher'])->get();
        return response()->json([
            'success' => true,
            'results' => $tutto
        ]);
    }
}
