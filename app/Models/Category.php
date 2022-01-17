<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image', 'parent_id'];
    public function getAllCategoriesCollection()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('getAllCategoriesCollection');
    }
    public function getAllCategoriesCollections()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function getAllCategoryProducts()
    {
        return $this->hasMany(Product::class, 'category_id', 'id')->where('status', 1);
    }
    public function getCategoryBlock($id, $parent_id)
    {
        $attribute = '';
        if ($parent_id) {
            if ($id == $parent_id) {
                $attribute = 'disabled';
            }
        }
        return $attribute;
    }
}
