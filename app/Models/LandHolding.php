<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandHolding extends Model
{
    use HasFactory;

    protected $fillable = ['locality', 'landType', 'irrigation', 'wellDepth'];
}

