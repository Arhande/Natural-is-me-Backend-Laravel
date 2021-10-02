<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'nama_penerima',
        'handphone',
        'provinsi',
        'kota',
        'kecamatan',
        'kodepos',
        'alamat',
        'courier_id',
        'ongkir',
        'harga_total',
        'user_id',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_has_products', 'order_id', 'product_id')->withPivot('qty');
    }
}
