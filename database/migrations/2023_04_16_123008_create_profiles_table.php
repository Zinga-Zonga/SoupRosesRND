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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number')->nullable();
            $table->string('adress')->nullable();
            $table->integer('total_bought')->nullable();

            $table->unsignedBigInteger('role_id');
            $table->index('role_id','profile_role_idx');
            $table->foreign('role_id','profile_role_fk')->on('roles')->references('id');

            $table->unsignedBigInteger('user_id');
            $table->index('user_id','profile_user_idx');
            $table->foreign('user_id','profile_user_fk')->on('users')->references('id');

            $table->unsignedBigInteger('order_products_id')->nullable();
            $table->index('order_products_id','profiles_order_products_idx');
            $table->foreign('order_products_id','profiles_order_products_fk')->on('order_products')->references('id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
