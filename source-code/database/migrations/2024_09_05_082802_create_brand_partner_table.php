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
        Schema::create('brand_partner', function (Blueprint $table) {
            $table->id(); // Primary key (id)
            $table->string('gambar'); // Image path or URL
            $table->enum('type', ['brand', 'partner', 'principal']); // Type: brand, partner, principal
            $table->string('url')->nullable(); // URL (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_partner');
    }
};
