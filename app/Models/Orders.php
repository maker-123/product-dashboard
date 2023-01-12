<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'contact_no',
        'contact_type',
        'username',
        'status',
        'order_type',
        'branch',
        'schedule',
        'address_line_1',
        'address_line_2',
        'city',
        'province',
        'landmark',
        'rep_fname',
        'rep_lname',
        'rep_contact_no',
        'admin_notes',
        'landmark',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
