<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'hash', 'product_id'];
    public function getAllVariantAttributes()
    {
        return $this->hasMany(VariantAttribute::class, 'variant_id', 'id');
    }
    public function getOneProductAttributes()
    {
        return $this->hasOne(ProductAttribute::class, 'product_id', 'product_id');
    }
}
