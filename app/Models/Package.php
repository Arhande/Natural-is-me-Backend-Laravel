<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
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
}
