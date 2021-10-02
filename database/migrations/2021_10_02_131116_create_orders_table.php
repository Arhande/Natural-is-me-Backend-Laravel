<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penerima');
            $table->string('handphone');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kodepos');
            $table->string('alamat');
            $table->integer('harga_total');
            $table->integer('ongkir');
            $table->foreignId('courier_id')->constrained('couriers')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
