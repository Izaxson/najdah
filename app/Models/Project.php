<?php

namespace App\Models;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        
       
        'status',
        'user_id',
        'category_id',
        'location',
        'start_date',
        'completed_date',
        'image',
        'project_cost',
        'sponsor_id'
    ];
   
    public function category(){
        return $this->belongsTo(ProjectCategory::class,'category_id')->withDefault();
    }
    
}