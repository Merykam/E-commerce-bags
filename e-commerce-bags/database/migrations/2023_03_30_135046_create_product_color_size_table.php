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
        Schema::create('product_color_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_size_id')->nullable();
            $table->unsignedBigInteger('product_color_id')->nullable();
            $table->foreign('product_size_id')->references('id')->on('product_sizes')->onDelete('cascade');
            $table->foreign('product_color_id')->references('id')->on('product_colors')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price_cs')->nullable();
            $table->decimal('discount_price_cs')->nullable();
            $table->integer('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_color_size');
    }
};
