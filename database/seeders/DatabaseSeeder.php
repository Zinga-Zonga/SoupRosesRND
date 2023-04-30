<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DeliveryType;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderState;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory('3')->create();
        User::factory('50')->create();
        Profile::factory('28')->create();
        DeliveryType::factory('2')->create();
        OrderState::factory('4')->create();
        Product::factory('42')->create();
        Order::factory('26')->create();
        OrderProduct::factory('20')->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
