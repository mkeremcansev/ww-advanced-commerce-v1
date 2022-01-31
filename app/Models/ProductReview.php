<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'hash', 'rating', 'status', 'user_id', 'product_id'];
    public function getOneReviewUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function getOneReviewProduct()
    {
        return $this->hasOne(ProductAttribute::class, 'product_id', 'product_id');
    }
}
