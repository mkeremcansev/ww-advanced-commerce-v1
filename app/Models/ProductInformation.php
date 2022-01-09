<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInformation extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'hash', 'product_id'];
}
