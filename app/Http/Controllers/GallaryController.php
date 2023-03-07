<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GallaryController extends Controller
{
    public function gallary(){
        $gallaries = DB::table('gallaries')->get();
        $data = [];
        foreach($gallaries as $gal){
            $images = json_decode($gal->images, true);
            $data[] = [
                'id' => $gal->id,
                'images' => $images,
                'title' => $gal->Title,
                'description' => $gal->description
            ];
        }
        return view('pages.gallary', compact('data'));
    }
    public function slider(){
        // $pro=Project::with('category')->find($id);
        $sliders = DB::table('gallaries')->orderBy('created_at', 'desc')->take(1)->get();
        $data = [];
        foreach($sliders as $gal){
            $images = json_decode($gal->images, true);
            $data[] = [
                'id' => $gal->id,
                'images' => $images,
                'title' => $gal->Title,
                'description' => $gal->description
            ];
        }
        return view('pages.home', compact('data'));

    }
    
}