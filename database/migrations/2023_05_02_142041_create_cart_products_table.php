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
        Schema::create('cart_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cart_id');
            $table->index('cart_id', 'cart_product_cart_idx');
            $table->foreign('cart_id', 'cart_product_cart_fk')->on('carts')->references('id')->onDelete('cascade')->onUpdate('cascade');;

            $table->unsignedBigInteger('product_id');
            $table->index('product_id', 'cart_product_product_idx');
            $table->foreign('product_id', 'cart_product_product_fk')->on('products')->references('id')->onDelete('cascade')->onUpdate('cascade');;

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_products');
    }
};
