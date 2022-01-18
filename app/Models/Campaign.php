<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image', 'hash'];
    public function getAllCampaignAttributes()
    {
        return $this->hasMany(CampaignAttribute::class, 'campaign_id', 'id');
    }
}
