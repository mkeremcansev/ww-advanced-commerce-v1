<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    public function getAllStoryAttributes(){
        return $this->hasMany(StoryAttribute::class, 'story_id', 'id');
    }
}
