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
        Schema::create('kredits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->integer('jenis_id');
            $table->integer('jaminan_id');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jumlah_pinjaman');
            $table->string('no_ktp');
            $table->string('no_telp');
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
        Schema::dropIfExists('kredits');
    }
};