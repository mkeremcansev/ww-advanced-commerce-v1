<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    public function getAllShowcaseAttributes()
    {
        return $this->hasMany(ShowcaseAttribute::class, 'showcase_id', 'id');
    }
}
