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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->integer('jumlah')->nullable();
            $table->integer('subtotal')->nullable();
            $table->enum('status', ['Sudah Sampai', 'Sudah Dipesan', 'Belum Dipesan'])->nullable();
            $table->integer('total')->nullable();
            $table->timestamps();
            $table->foreign('id_produk')->references('id')->on('produks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_user')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
