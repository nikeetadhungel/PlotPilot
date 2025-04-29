<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WellDepth extends Model
{
    use HasFactory;

    protected $fillable = ['locality', 'depth', 'water_level', 'well_type'];
}

