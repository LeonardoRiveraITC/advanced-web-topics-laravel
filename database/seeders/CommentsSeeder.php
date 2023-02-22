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
            'message' => 'Se que este no es el lugar ni el momento, pero quiero quemar a una robamaridos...',
            'product_id' => '2',
        ]);
        DB::table('comments')->insert([
            'fullname' => 'NotABot',
            'email' => 'asdhjasd@rumail.ru',
            'message' => 'Buy Bitcoin -> http://totallynotabitcoinscam.xyz',
            'product_id' => '3',
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
            'message' => 'Se que este no es el lugar ni el momento, pero quiero quemar a una robamaridos...',
            'product_id' => '5',
        ]);
        DB::table('comments')->insert([
            'fullname' => 'NotABot',
            'email' => 'asdhjasd@rumail.ru',
            'message' => 'Buy Bitcoin -> http://totallynotabitcoinscam.xyz',
            'product_id' => '6',
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
            'message' => 'Se que este no es el lugar ni el momento, pero quiero quemar a una robamaridos...',
            'product_id' => '8',
        ]);
        DB::table('comments')->insert([
            'fullname' => 'NotABot',
            'email' => 'asdhjasd@rumail.ru',
            'message' => 'Buy Bitcoin -> http://totallynotabitcoinscam.xyz',
            'product_id' => '9',
        ]);
    }
}
