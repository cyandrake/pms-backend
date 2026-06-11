<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            ['product_name'=>'Laptop','product_description'=>'Gaming laptop RTX','quantity'=>10,'price'=>55000.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'Mouse','product_description'=>'Wireless mouse','quantity'=>50,'price'=>500.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'Keyboard','product_description'=>'Mechanical keyboard','quantity'=>30,'price'=>1500.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'Monitor','product_description'=>'24 inch LED monitor','quantity'=>20,'price'=>7000.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'Headset','product_description'=>'Gaming headset','quantity'=>25,'price'=>1200.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'Chair','product_description'=>'Ergonomic chair','quantity'=>15,'price'=>8000.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'Table','product_description'=>'Office table','quantity'=>10,'price'=>5000.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'Printer','product_description'=>'All-in-one printer','quantity'=>8,'price'=>6000.00,'status'=>false,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'SSD','product_description'=>'512GB SSD','quantity'=>40,'price'=>2500.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
            ['product_name'=>'RAM','product_description'=>'16GB DDR4','quantity'=>35,'price'=>3000.00,'status'=>true,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
