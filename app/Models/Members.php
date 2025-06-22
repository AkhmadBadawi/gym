<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'status',
        'payment_receipt',
        'photo',
    ];
}
