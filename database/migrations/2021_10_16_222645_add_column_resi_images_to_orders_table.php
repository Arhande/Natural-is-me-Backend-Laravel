<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnResiImagesToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->text('image_bukti')->after('nama_penerima')->nullable();
            $table->text('image_bukti_path')->after('image_bukti')->nullable();
            $table->string('no_resi')->after('id')->nullable();
            $table->string('catatan')->after('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['image_bukti', 'no_resi', 'catatan']);
        });
    }
}
