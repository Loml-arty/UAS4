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
        Schema::create("packs", function (Blueprint $table){
            $table->id();
            $table->text("nama_paket");
            $table->text("foto_paket");
            $table->text(column:"deskripsi_paket");
            $table->text(column:"Harga");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists("packs");
    }
};
