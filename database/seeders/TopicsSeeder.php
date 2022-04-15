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
            'description' => 'Food and drinks are a recurring talking point, not only while eating out on vacation. So let’s learn the most common words and phrases related to this topic.'
        ]);

        DB::table('topics')->insert([
            'name' => 'Family',
            'description' => 'Talking about your friends and relatives is much more fun than just talking about yourself. So, let’s learn some useful words & phrases that will help you talk to others about the people you love most.'
        ]);

        DB::table('topics')->insert([
            'name' => 'Colors',
            'description' => 'This lesson will teach you to describe the colors and appearance of people and things in language. Learn to express whether something is big or small, red or green, beautiful of ugly.'
        ]);

        DB::table('topics')->insert([
            'name' => 'Numbers',
            'description' => 'Numbers are a great place to begin your journey into the language. Start by learning the numbers from 1 to 10, then 11 to 20, 21 to 100 and so on.'
        ]);

        DB::table('topics')->insert([
            'name' => 'Nouns',
            'description' => 'Nouns represent people or things. You’ll need them whenever you want to refer to somebody or something. Memorize the nouns below and you’ll be well equipped for almost every basic conversation.'
        ]);

        DB::table('topics')->insert([
            'name' => 'Verbs',
            'description' => 'Verbs describe movement or action. You’ll need them whenever you want to talk about what you, somebody or something else does, did or wants to do.'
        ]);

        DB::table('topics')->insert([
            'name' => 'Adverbs',
            'description' => 'Adverbs describe how, when or where. This lesson will teach you how the days of the week, months, seasons and times of day are called in the language.'
        ]);

        DB::table('topics')->insert([
            'name' => 'Adjectives',
            'description' => 'Adjectives describe people or things. You’ll need them whenever you want to describe what something or somebody is like. The car is old, the hotel is cheap.'
        ]);
    }
}
