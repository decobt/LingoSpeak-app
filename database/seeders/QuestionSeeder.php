<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => 'What is the name for bread?',
            'choices' => json_encode([ 'a' => 'djathë', 'b'=> 'bukë', 'c'=> 'sheqer', 'd'=> 'vezë' ]),
            'answer' => 'b',
            'topic_id' => 23
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for breakfast?',
            'choices' => json_encode([ 'a' => 'drekë', 'b'=> 'ushqim', 'c'=> 'mëngjes', 'd'=> 'darkë' ]),
            'answer' => 'c',
            'topic_id' => 23
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for dinner?',
            'choices' => json_encode([ 'a' => 'mëngjes', 'b'=> 'erëza', 'c'=> 'pjatë', 'd'=> 'darkë' ]),
            'answer' => 'd',
            'topic_id' => 23
        ]);
    }
}
