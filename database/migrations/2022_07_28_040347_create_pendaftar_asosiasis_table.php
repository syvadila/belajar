<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarAsosiasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar_asosiasis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('nik');
            $table->string('alamat');
            $table->string('nama_umkm');
            $table->string('asosiasi');
            $table->string('status')->nullable()->default('pending');
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
        Schema::dropIfExists('pendaftar_asosiasis');
    }
}
