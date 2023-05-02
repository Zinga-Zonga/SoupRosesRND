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



        // \App\Models\User::factory(10)->create();

         \App\Models\Role::factory()->create([
             'id' => '1',
             'name' => 'user',
         ]);
         \App\Models\Role::factory()->create([
             'id' => '2',
             'name' => 'admin',
         ]);
         \App\Models\DeliveryType::factory()->create([
             'id' => '1',
             'name' => 'Самовывоз',
         ]);
         \App\Models\DeliveryType::factory()->create([
             'id' => '2',
             'name' => 'Доставка',
         ]);
         \App\Models\OrderState::factory()->create([
             'id' => '1',
             'name' => 'Новый',
         ]);
         \App\Models\OrderState::factory()->create([
             'id' => '2',
             'name' => 'В сборке',
         ]);
         \App\Models\OrderState::factory()->create([
             'id' => '3',
             'name' => 'В доставке',
         ]);

    }
}
