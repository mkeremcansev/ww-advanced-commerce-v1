<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'story_id'];
}
