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
        Schema::create('inspeksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('monitoring_id')->constrained('monitoring')->onDelete('cascade');
            $table->string('pic'); // person in charge
            $table->timestamp('waktu'); // visit time
            $table->string('gambar'); // image path
            $table->string('judul'); // title of the visit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspeksi');
    }
};