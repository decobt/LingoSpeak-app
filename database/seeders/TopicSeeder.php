<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            'id' => 1,
            'name' => 'Food',
            'description' => 'Food and drinks are a recurring talking point, not only while eating out on vacation. So let’s learn the most common words and phrases related to this topic.',
            'icon' => 'fa-pizza-slice'
        ]);

        DB::table('topics')->insert([
            'id' => 2,
            'name' => 'Family',
            'description' => 'Talking about your friends and relatives is much more fun than just talking about yourself. So, let’s learn some useful words & phrases that will help you talk to others about the people you love most.',
            'icon' => 'fa-people-group'
        ]);

        DB::table('topics')->insert([
            'id' => 3,
            'name' => 'Colors',
            'description' => 'This lesson will teach you to describe the colors and appearance of people and things in language. Learn to express whether something is big or small, red or green, beautiful of ugly.',
            'icon' => 'fa-brush'
        ]);

        DB::table('topics')->insert([
            'id' => 4,
            'name' => 'Numbers',
            'description' => 'Numbers are a great place to begin your journey into the language. Start by learning the numbers from 1 to 10, then 11 to 20, 21 to 100 and so on.',
            'icon' => 'fa-arrow-down-1-9'
        ]);

        DB::table('topics')->insert([
            'id' => 5,
            'name' => 'Nouns',
            'description' => 'Nouns represent people or things. You’ll need them whenever you want to refer to somebody or something. Memorize the nouns below and you’ll be well equipped for almost every basic conversation.',
            'icon' => 'fa-shapes'
        ]);

        DB::table('topics')->insert([
            'id' => 6,
            'name' => 'Verbs',
            'description' => 'Verbs describe movement or action. You’ll need them whenever you want to talk about what you, somebody or something else does, did or wants to do.',
            'icon' => 'fa-school-flag'
        ]);

        DB::table('topics')->insert([
            'id' => 7,
            'name' => 'Adverbs',
            'description' => 'Adverbs describe how, when or where. This lesson will teach you how the days of the week, months, seasons and times of day are called in the language.',
            'icon' => 'fa-chess-rook'
        ]);

        DB::table('topics')->insert([
            'id' => 8,
            'name' => 'Adjectives',
            'description' => 'Adjectives describe people or things. You’ll need them whenever you want to describe what something or somebody is like. The car is old, the hotel is cheap.',
            'icon' => 'fa-masks-theater'
        ]);
    }
}
