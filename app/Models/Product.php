<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'product_category', 'description'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
