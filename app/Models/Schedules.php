<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class schedules extends Model
{
    use HasFactory;
    
    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    protected $fillable = [
        'type'
    ];
    protected $casts = [
        
        'start'=>'datetime',

        'end'=>'datetime',

    ];
    
}
