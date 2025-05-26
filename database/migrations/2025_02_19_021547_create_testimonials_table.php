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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_services_schedules');
            $table->foreign('id_services_schedules')->references('id')->on('services_schedules')->onUpdate('cascade')->onDelete('cascade');
            $table->string('testimoni');
            $table->date('tgl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
