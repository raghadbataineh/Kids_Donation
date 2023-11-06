<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Kit extends Model
{
    public $timestamps = false;
    use HasFactory;
    

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
        
    }
}
