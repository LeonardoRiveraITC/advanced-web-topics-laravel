<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product' => 'Pollo',
            'description' => 'Pollo',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'meats.jpg',
            'category_id'=>'4'
        ]);
        DB::table('products')->insert([
            'product' => 'Res',
            'description' => 'Res',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'meats.jpg',
            'category_id'=>'4'
        ]);
        DB::table('products')->insert([
            'product' => 'Cerdo',
            'description' => 'Cerdo',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'meats.jpg',
            'category_id'=>'4'
        ]);
        DB::table('products')->insert([
            'product' => 'Conejo',
            'description' => 'Conejo',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'meats.jpg',
            'category_id'=>'4'
        ]);
        DB::table('products')->insert([
            'product' => 'Manzana',
            'description' => 'Manzana',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'fruits.jpg',
            'category_id'=>'2'
        ]);
        DB::table('products')->insert([
            'product' => 'Naranja',
            'description' => 'Naranja',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'fruits.jpg',
            'category_id'=>'2'
        ]);
        DB::table('products')->insert([
            'product' => 'Mandarina',
            'description' => 'Mandarina',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'fruits.jpg',
            'category_id'=>'2'
        ]);
        DB::table('products')->insert([
            'product' => 'Platano',
            'description' => 'Platano',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'fruits.jpg',
            'category_id'=>'2'
        ]);
        
        DB::table('products')->insert([
            'product' => 'Zanahoria',
            'description' => 'Zanahoria',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'vegetables.jpg',
            'category_id'=>'1'
        ]);
        DB::table('products')->insert([
            'product' => 'Papa',
            'description' => 'Papa',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'vegetables.jpg',
            'category_id'=>'1'
        ]);
        DB::table('products')->insert([
            'product' => 'Coliflor',
            'description' => 'Coliflor',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'vegetables.jpg',
            'category_id'=>'1'
        ]);
        DB::table('products')->insert([
            'product' => 'Brocoli',
            'description' => 'Brocolu',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'vegetables.jpg',
            'category_id'=>'1'
        ]);
        DB::table('products')->insert([
            'product' => 'Lazaña congelada',
            'description' => 'Lazaña congelada',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'frozen.jpg',
            'category_id'=>'6'
        ]);
        DB::table('products')->insert([
            'product' => 'Pizza congelada',
            'description' => 'Pizza congelada',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'frozen.jpg',
            'category_id'=>'6'
        ]);
        DB::table('products')->insert([
            'product' => 'Vegetales congelados',
            'description' => 'Vegetales congelados',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'frozen.jpg',
            'category_id'=>'6'
        ]);
    }
}
