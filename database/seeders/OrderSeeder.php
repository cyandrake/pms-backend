<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            ['product_id'=>1,'user_id'=>1,'price'=>55000.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>2,'user_id'=>2,'price'=>500.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>3,'user_id'=>3,'price'=>1500.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>4,'user_id'=>4,'price'=>7000.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>5,'user_id'=>5,'price'=>1200.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>6,'user_id'=>6,'price'=>8000.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>7,'user_id'=>7,'price'=>5000.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>8,'user_id'=>8,'price'=>6000.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>9,'user_id'=>9,'price'=>2500.00,'created_at' => now(),'updated_at' => now()],
            ['product_id'=>10,'user_id'=>10,'price'=>3000.00,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
