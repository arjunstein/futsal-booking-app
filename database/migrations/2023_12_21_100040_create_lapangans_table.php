<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapangans', function (Blueprint $table) {
            $table->id();
            $table->string("nama_lapangan");
            $table->string('gambar');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category_fields')->onDelete('restrict');
            $table->string("status")->default('Tersedia');
            $table->integer("harga_sewa_siang");
            $table->integer("harga_sewa_malam");
            $table->text('deskripsi');
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
        Schema::dropIfExists('lapangans');
    }
};
