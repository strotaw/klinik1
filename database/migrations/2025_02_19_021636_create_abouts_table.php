<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('deskripsi');
            $table->string('foto_jumbotron');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('foto5');
            $table->string('foto6');
            $table->string('foto7');
            $table->string('foto8');
            $table->string('foto9');
            $table->string('foto10');
            $table->string('kota_kantor');
            $table->string('alamat_kantor');
            $table->string('telp_kantor');
            $table->string('email_kantor');
            $table->string('kota_poliklinik1');
            $table->string('alamat_poliklinik1');
            $table->string('telp_poliklinik1');
            $table->string('email_poliklinik1');
            $table->string('kota_poliklinik2');
            $table->string('alamat_poliklinik2');
            $table->string('telp_poliklinik2');
            $table->string('email_poliklinik2');
            $table->string('kota_poliklinik3');
            $table->string('alamat_poliklinik3');
            $table->string('telp_poliklinik3');
            $table->string('email_poliklinik3');
            $table->string('kota_poliklinik4');
            $table->string('alamat_poliklinik4');
            $table->string('telp_poliklinik4');
            $table->string('email_poliklinik4');
            $table->string('kota_poliklinik5');
            $table->string('alamat_poliklinik5');
            $table->string('telp_poliklinik5');
            $table->string('email_poliklinik5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
