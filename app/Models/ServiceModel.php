<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;

    protected $table = 'home_service';

    protected $fillable = [
        'title', // Add 'title' to the fillable array
        'description',
        // Add more fields here if needed
    ];
}
