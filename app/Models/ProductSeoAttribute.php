<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSeoAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'keywords', 'product_id'];
}
