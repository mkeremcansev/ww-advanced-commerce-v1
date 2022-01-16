<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignAttribute extends Model
{
    use HasFactory;
    public function getAllCampaignAttributeCampaigns()
    {
        return $this->hasMany(Campaign::class, 'id', 'campaign_id');
    }
}
