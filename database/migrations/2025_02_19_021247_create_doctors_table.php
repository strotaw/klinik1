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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokter', 50);
            $table->string('gelar_depan', 20);
            $table->string('gelar_belakang', 20);
            $table->string('spesialis', 20);
            $table->enum('jk',['L', 'P']);
            $table->string('alamat');
            $table->string('telepon', 15);
            $table->enum('agama',['I', 'H','B','K','P','L']);
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
