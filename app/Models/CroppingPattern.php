<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CroppingPattern extends Model
{
    use HasFactory;

    protected $fillable = [
        'locality', 'crop_type', 'season', 'irrigation'
    ];
}
