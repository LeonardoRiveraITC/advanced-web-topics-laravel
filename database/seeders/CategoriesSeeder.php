<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Vegetales',
            'description' => 'Vegetales',
            'image' => 'sb-bistro-carrot',
        ]);
        DB::table('categories')->insert([
            'category' => 'Frutas',
            'description' => 'Frutas',
            'image' => 'sb-bistro-apple',
        ]);
        DB::table('categories')->insert([
            'category' => 'Pescado',
            'description' => 'Pescado',
            'image' => 'sb-bistro-fish-1',
        ]);
        DB::table('categories')->insert([
            'category' => 'Carnes',
            'description' => 'Carnes',
            'image' => 'sb-bistro-leg',
        ]);
        DB::table('categories')->insert([
            'category' => 'Comida empaquetada',
            'description' => 'Comida empaquetada',
            'image' => 'sb-bistro-appetizer',
        ]);
        DB::table('categories')->insert([
            'category' => 'Congelados',
            'description' => 'Congelados',
            'image' => 'sb-bistro-frozen',
        ]);
    }
}
