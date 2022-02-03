<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['hash', 'user_id', 'phone', 'adress', 'total', 'status'];

    public function getAllOrderAttributes()
    {
        return $this->hasMany(OrderAttribute::class, 'order_id', 'id');
    }
}
