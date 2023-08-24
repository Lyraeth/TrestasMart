<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('kode_items');
            $table->string('nama_items');
            $table->string('deskripsi_items');
            $table->integer('harga_items');
            $table->integer('stock_items');
            $table->foreignId('kategoris_id')->constrained();
            $table->foreignId('realeases_id')->constrained();
            $table->integer('nilai_items')->nullable();
            $table->string('items_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};