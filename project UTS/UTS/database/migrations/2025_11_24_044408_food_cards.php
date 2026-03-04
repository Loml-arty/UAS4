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
        Schema::create("food_cards", function (Blueprint $table) {
            $table->id();
            $table->text("nama_makanan");
            $table->text("foto_makanan");
            $table->text(column:"deskripsi_makanan");
            $table->text(column:"Harga");
            $table->timestamps();
        });   

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("food_cards");
    }
};
