<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHasProducts extends Model
{
    use HasFactory;

    protected $table = 'order_has_products';

    protected $fillable = [
        'product_id',
        'package_id',
        'order_id',
        'qty'
    ];
}
