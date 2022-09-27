<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'pick_up_from', 'pick_up_time', 'drop_off_to', 'post_id', 'drop_off_time'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
