<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['hash', 'user_id', 'phone', 'adress', 'coupon', 'total', 'cargo_code', 'cargo_id' ,'status'];

    public function getAllOrderAttributes()
    {
        return $this->hasMany(OrderAttribute::class, 'order_id', 'id');
    }
    public function getOneUsers(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function getOrderCargos(){
        return $this->hasOne(Cargo::class, 'id', 'cargo_id');
    }
}
