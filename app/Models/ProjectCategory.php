<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        
       
        'category',
        'description',
        'image'
        
    ];
   
    public function projects(){
        
        return $this->belongsTo(Project::class)->withDefault();
    }
}