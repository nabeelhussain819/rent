<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image', 'image1', 'category_id', 'price', 'feature', 'passenger', 'Luggage'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function review()
    {
        return $this->hasOne(Review::class);
    }
    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
}
