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

            $table->unsignedBigInteger('state_id');
            $table->index('state_id','order_state_idx');
            $table->foreign('state_id','order_state_fk')->on('order_states')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('delivery_type_id');
            $table->index('delivery_type_id','order_delivery_type_idx');
            $table->foreign('delivery_type_id','order_delivery_type_fk')->on('delivery_types')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('profile_id');
            $table->index('profile_id','order_profile_id_idx');
            $table->foreign('profile_id','order_profile_id_fk')->on('profiles')->references('id')->onDelete('cascade')->onUpdate('cascade');

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
