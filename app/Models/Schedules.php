<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class schedules extends Model
{
    use HasFactory;
    
    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    public function getNameAttribute()
    {
        $start = new Carbon($this->start);
        $end = new Carbon($this->end);

        return $start->format('g:i A') . ' - ' . $end->format('g:i A');
    }

    protected $fillable = [
        'type'
    ];
    
    protected $casts = [
        
        'start'=>'datetime',

        'end'=>'datetime',

    ];
    
}
