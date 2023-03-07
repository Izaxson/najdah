<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class PortfolioController extends Controller
{
    public function portfolio(){
        $cat = ProjectCategory::with('projects')->get();     
        return view('pages.portfolio');
    }
}