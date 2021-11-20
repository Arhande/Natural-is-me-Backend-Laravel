<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = Package::create([
            'id'=>0,
            'nama'=>"Perawatan Tanaman",
            'harga'=>100000,
            'deskripsi1'=>"Foto Taman mu Terlebih dahulu.",
            'deskripsi2'=>"Kirim Foto ke Whatsapp Diatas.",
            'deskripsi3'=>"Tentukan Hari",
            'deskripsi4'=>"Bayar & Kami Siap Merawat Taman Anda",
            'deskripsi5'=>"Silahkan ditunggu",
            'image'=>"/storage/packages/images/PerawatanTaman.jpg",
            'image_path'=>"public/packages/images/PerawatanTaman.jpg"
        ]);
        $package->id=0;
        $package->save();
    }
}
