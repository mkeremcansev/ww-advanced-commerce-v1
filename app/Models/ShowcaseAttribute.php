<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowcaseAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'showcase_id', 'category_id', 'url'];
    public function getOneShowcaseAttributeCategory(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
