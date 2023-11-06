<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingCampaign extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'fullName',
        'email',
        'phone',
        'target_money',
        'description',
        'user_id',
    ];
}
