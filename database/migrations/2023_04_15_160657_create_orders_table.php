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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');

            $table->unsignedBigInteger('state_id');
            $table->index('state_id','order_state_idx');
            $table->foreign('state_id','order_state_fk')->on('order_states')->references('id');

            $table->integer('price');
            $table->string('arrival_address');

            $table->unsignedBigInteger('delivery_type_id');
            $table->index('delivery_type_id','order_delivery_type_idx');
            $table->foreign('delivery_type_id','order_delivery_type_fk')->on('delivery_types')->references('id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
