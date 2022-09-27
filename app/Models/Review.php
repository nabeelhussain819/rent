<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'email', 'rating', 'post_id'
    ];
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
