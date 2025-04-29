<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Irrigation extends Model
{
    use HasFactory;

    // Add 'locality' to the fillable array
    protected $fillable = [
        'locality', 'source', 'area', 'system'
    ];
}

