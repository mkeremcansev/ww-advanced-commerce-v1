<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['hash', 'status', 'category_id', 'brand_id'];
    public function getOneProductAttributes()
    {
        return $this->hasOne(ProductAttribute::class, 'product_id', 'id');
    }
    public function getAllProductAttributes()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id', 'id');
    }
    public function getOneProductCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function getOneProductBrand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }
    public function getAllProductInformations()
    {
        return $this->hasMany(ProductInformation::class, 'product_id', 'id');
    }
    public function getAllProductImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function getOneProductImages()
    {
        return $this->hasOne(ProductImage::class, 'product_id', 'id');
    }
    public function getAllProductVariants()
    {
        return $this->hasMany(Variant::class, 'product_id', 'id');
    }
    public function getAllProductReviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id', 'id')->whereStatus(1);
    }
    public function getAllProductAuthReviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id', 'id');
    }
    public function getAllCampaignProducts()
    {
        return $this->hasMany(CampaignAttribute::class, 'product_id', 'id');
    }
    public function getOneProductSeoAttributes(){
        return $this->hasOne(ProductSeoAttribute::class, 'product_id', 'id');
    }
    public function getAllProductHits(){
        return $this->hasMany(Hit::class, 'product_id', 'id');
    }
}
