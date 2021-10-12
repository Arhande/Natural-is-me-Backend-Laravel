<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'first_name',
        'last_name',
        'image',
        'image_hover',
        'perawatan',
        'jenis',
        'air',
        'harga',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

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
}
