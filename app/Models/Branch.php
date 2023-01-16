<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
    protected $fillable = [
        'name',
    ];
}

