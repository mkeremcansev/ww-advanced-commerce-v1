<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['hash', 'status', 'category_id', 'brand_id'];
    public function getAllProductAttributes()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id', 'id');
    }
    public function getOneProductAttributes()
    {
        return $this->hasOne(ProductAttribute::class, 'product_id', 'id');
    }
    public function getAllProductInformations()
    {
        return $this->hasMany(ProductInformation::class, 'product_id', 'id');
    }
    public function getAllProductImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function getAllProductVariants()
    {
        return $this->hasMany(Variant::class, 'product_id', 'id');
    }
}
