<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'stock', 'price', 'hash', 'variant_id'];

    public function getOneVariantMain()
    {
        return $this->hasOne(Variant::class, 'id', 'variant_id');
    }
}
