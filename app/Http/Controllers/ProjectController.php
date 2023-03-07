<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    public function details($id)
    {

        $project = Project::findOrFail($id);
        $cat = ProjectCategory::with('projects')->get();
        return view('pages.portfolio-details')->with('project', $project);
        
    }
   
}