<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceDetail extends Model
{
    protected $fillable = ['price_id', 'tier', 'price'];
    protected $hidden = ['created_at', 'updated_at'];

    public function price() 
    {
        return $this->belongsTo(Price::class);
    }
}
