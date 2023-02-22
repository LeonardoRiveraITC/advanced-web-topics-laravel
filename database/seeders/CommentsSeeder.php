<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'fullname' => 'Pedro',
            'email' => 'Perdo@gmail.com',
            'message' => 'Me gusto mucho',
            'product_id' => '1',
        ]);
        DB::table('comments')->insert([
            'fullname' => 'Maria ',
            'email' => 'Maria@gmail.com',
            'message' => 'Me llego todo golpeado el producto...',
            'product_id' => '1',
        ]);

        DB::table('comments')->insert([
            'fullname' => 'Maria ',
            'email' => 'Maria@gmail.com',
            'message' => 'Me llego todo golpeado el producto...',
            'product_id' => '2',
        ]);

        DB::table('comments')->insert([
            'fullname' => 'Pedro',
            'email' => 'Perdo@gmail.com',
            'message' => 'Me gusto mucho',
            'product_id' => '4',
        ]);
        DB::table('comments')->insert([
            'fullname' => 'Maria ',
            'email' => 'Maria@gmail.com',
            'message' => 'Me llego todo golpeado el producto...',
            'product_id' => '5',
        ]);

        DB::table('comments')->insert([
            'fullname' => 'Pedro',
            'email' => 'Perdo@gmail.com',
            'message' => 'Me gusto mucho',
            'product_id' => '7',
        ]);
        DB::table('comments')->insert([
            'fullname' => 'Maria ',
            'email' => 'Maria@gmail.com',
            'message' => 'Me llego todo golpeado el producto...',
            'product_id' => '8',
        ]);
    }
}
