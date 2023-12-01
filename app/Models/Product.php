<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'id',
        'name',
        'type',
        'img',
        'description',
        'composition',
        'price',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
