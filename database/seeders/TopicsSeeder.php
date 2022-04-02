<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            'name' => 'Food',
        ]);

        DB::table('topics')->insert([
            'name' => 'Family',
        ]);

        DB::table('topics')->insert([
            'name' => 'Colors',
        ]);

        DB::table('topics')->insert([
            'name' => 'Verbs',
        ]);

        DB::table('topics')->insert([
            'name' => 'Adverbs',
        ]);

        DB::table('topics')->insert([
            'name' => 'Adjectives',
        ]);
    }
}
