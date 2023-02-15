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
            'image'=>'pollo',
            'category_id'=>'4'
        ]);
        DB::table('products')->insert([
            'product' => 'Res',
            'description' => 'Res',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'pollo',
            'category_id'=>'4'
        ]);
        DB::table('products')->insert([
            'product' => 'Manzana',
            'description' => 'Manzana',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'pollo',
            'category_id'=>'2'
        ]);
        DB::table('products')->insert([
            'product' => 'Zanahoria',
            'description' => 'Zanahoria',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'pollo',
            'category_id'=>'1'
        ]);
        DB::table('products')->insert([
            'product' => 'Lazaña congelada',
            'description' => 'Lazaña congelada',
            'purchase_price' => '100',
            'sale_price'=>'50',
            'quantity'=>'100',
            'image'=>'pollo',
            'category_id'=>'6'
        ]);
    }
}
