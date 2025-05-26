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
        Schema::create('services_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_layanan');
            $table->foreign('id_layanan')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_dokter');
            $table->foreign('id_dokter')->references('id')->on('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_layanan');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('foto5');
            $table->integer('biaya_layanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_schedules');
    }
};
