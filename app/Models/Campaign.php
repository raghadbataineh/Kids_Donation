<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'target_money',
        'raised_money',
        'start_date',
        'end_date',
        'active',
    ];
}
