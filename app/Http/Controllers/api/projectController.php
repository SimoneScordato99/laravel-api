<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Genere;
use App\Models\Lenguage;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(Request $request){
        // if($request->has('genere_id')){
        //     $projects = Project::with(['genere', 'lenguages'])->where('genere_id', $request->genere_id)->paginate(4);
        // } 
        // else {
        //     $projects = Project::with(['genere', 'lenguages'])->paginate(4);
        // }

        $query = Project::with('genere','lenguages');
       
        if($request->has('genere_id')){
            $query->where('genere_id', $request->genere_id);
        }

        if($request->has('lenguages_ids')){
            $mario_ids = explode(',', $request->lenguages_ids);
            $query->whereHas('lenguages',function($query)use($mario_ids){ 
                $query->whereIn('id',$mario_ids);
            });
        }
        $projects = $query->paginate(4);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
}
