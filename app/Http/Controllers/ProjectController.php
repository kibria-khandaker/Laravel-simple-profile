<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function page(Request $request){
        return view('pages.projects');
    }

    function projectsData(Request $request){
        // sleep(5);
        return DB::table('projects')->get();
    }
}
