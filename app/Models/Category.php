<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kit;

class Category extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function kits()
    {
        return $this->hasMany(Kit::class);
    }
}
