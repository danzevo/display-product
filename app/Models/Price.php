<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['product_id', 'unit'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function product() 
    {
        return $this->belongsTo(Product::class);
    }

    public function priceDetails()
    {
        return $this->hasMany(PriceDetail::class);
    }
}
