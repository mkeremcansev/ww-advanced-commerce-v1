<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'hash', 'price', 'discount', 'sku', 'product_id'];
    public function getAllCampaignProducts()
    {
        return $this->hasMany(CampaignAttribute::class, 'product_id', 'id');
    }
    public function getOneProductMain()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
