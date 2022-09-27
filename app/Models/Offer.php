<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'valid_date', 'post_id', 'three_days_price', 'one_month_price', 'One_week_price'
    ];
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
