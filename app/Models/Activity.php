<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    protected $fillable = [
        'name',
        'description',
        'picture',
        'date',
    ];

    public function getPictureUrlAttribute()
    {
        return asset('storage/' . $this->picture);
    }
}
