<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'name',
        'description',
        'type',
        'travel_options',
        'price',
        'status',
    ];

}
