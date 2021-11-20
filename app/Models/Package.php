<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'id',
        'nama',
        'harga',
        'image',
        'image_path',
        'deskripsi1',
        'deskripsi2',
        'deskripsi3',
        'deskripsi4',
        'deskripsi5',
    ];

    //laravel accesor
    public function getImageAttribute($value)
    {
        return $value ? url($value) : $value;
    }

    //laravel accesor
    public function getImageHoverAttribute($value)
    {
        return $value ? url($value) : $value;
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_has_products', 'order_id', 'package_id')->withPivot('qty');
    }
}
