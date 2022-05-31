<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'John Doe',
            'email' => Str::random(12).'@mail.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Johanna Doe',
            'email' => Str::random(12).'@mail.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Johan Doe',
            'email' => Str::random(12).'@mail.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Joan Doen',
            'email' => Str::random(12).'@mail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
