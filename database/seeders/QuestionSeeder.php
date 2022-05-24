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
            'question' => 'What is the name for "bread"?',
            'choices' => json_encode([ 'a' => 'djathë', 'b'=> 'bukë', 'c'=> 'sheqer', 'd'=> 'vezë' ]),
            'answer' => 'b',
            'topic_id' => 23 //food
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "breakfast"?',
            'choices' => json_encode([ 'a' => 'drekë', 'b'=> 'ushqim', 'c'=> 'mëngjes', 'd'=> 'darkë' ]),
            'answer' => 'c',
            'topic_id' => 23 //food
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "dinner"?',
            'choices' => json_encode([ 'a' => 'mëngjes', 'b'=> 'erëza', 'c'=> 'pjatë', 'd'=> 'darkë' ]),
            'answer' => 'd',
            'topic_id' => 23 //food
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "water"?',
            'choices' => json_encode([ 'a' => 'patate', 'b'=> 'domate', 'c'=> 'banane', 'd'=> 'ujë' ]),
            'answer' => 'd',
            'topic_id' => 23 //food
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "father"?',
            'choices' => json_encode([ 'a' => 'vëlla', 'b'=> 'motra', 'c'=> 'babai', 'd'=> 'nënë' ]),
            'answer' => 'c',
            'topic_id' => 24 //family
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "brother"?',
            'choices' => json_encode([ 'a' => 'nënë', 'b'=> 'babai', 'c'=> 'motra', 'd'=> 'vëlla' ]),
            'answer' => 'd',
            'topic_id' => 24 //family
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "mother"?',
            'choices' => json_encode([ 'a' => 'motra', 'b'=> 'vëlla', 'c'=> 'nënë', 'd'=> 'babai' ]),
            'answer' => 'c',
            'topic_id' => 24 //family
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "sister"?',
            'choices' => json_encode([ 'a' => 'vëlla', 'b'=> 'motra', 'c'=> 'babai', 'd'=> 'nënë' ]),
            'answer' => 'b',
            'topic_id' => 24 //family
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "blue" color?',
            'choices' => json_encode([ 'a' => 'i/e verdhe', 'b'=> 'i/e kaltër', 'c'=> 'i/e bardhë', 'd'=> 'i/e gjelbër' ]),
            'answer' => 'b',
            'topic_id' => 25 //colors
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "white" color?',
            'choices' => json_encode([ 'a' => 'i/e bardhë', 'b'=> 'i/e gjelbër', 'c'=> 'i/e verdhe', 'd'=> 'i/e kaltër' ]),
            'answer' => 'a',
            'topic_id' => 25 //colors
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "yellow" color?',
            'choices' => json_encode([ 'a' => 'i/e gjelbër', 'b'=> 'i/e bardhë', 'c'=> 'i/e kaltër', 'd'=> 'i/e verdhe' ]),
            'answer' => 'd',
            'topic_id' => 25 //colors
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "green" color?',
            'choices' => json_encode([ 'a' => 'i/e gjelbër', 'b'=> 'i/e zezë', 'c'=> 'i/e verdhe', 'd'=> 'i/e kaltër' ]),
            'answer' => 'a',
            'topic_id' => 25 //colors
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for number "six"?',
            'choices' => json_encode([ 'a' => 'katër', 'b'=> 'shtatë', 'c'=> 'nëntë', 'd'=> 'gjashtë' ]),
            'answer' => 'd',
            'topic_id' => 26 //numbers
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for number "nine"?',
            'choices' => json_encode([ 'a' => 'shtatë', 'b'=> 'katër', 'c'=> 'nëntë', 'd'=> 'gjashtë' ]),
            'answer' => 'c',
            'topic_id' => 26 //numbers
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for number "seven"?',
            'choices' => json_encode([ 'a' => 'shtatë', 'b'=> 'katër', 'c'=> 'gjashtë', 'd'=> 'nëntë' ]),
            'answer' => 'a',
            'topic_id' => 26 //numbers
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for number "four"?',
            'choices' => json_encode([ 'a' => 'katër', 'b'=> 'një', 'c'=> 'pesë', 'd'=> 'nëntë' ]),
            'answer' => 'a',
            'topic_id' => 26 //numbers
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "bed"?',
            'choices' => json_encode([ 'a' => 'shtrat', 'b'=> 'dollap', 'c'=> 'tavolinë', 'd'=> 'dhomë' ]),
            'answer' => 'a',
            'topic_id' => 27 //nouns
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "room"?',
            'choices' => json_encode([ 'a' => 'filxhan', 'b'=> 'dhomë', 'c'=> 'shishe', 'd'=> 'dollap' ]),
            'answer' => 'b',
            'topic_id' => 27 //nouns
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "table"?',
            'choices' => json_encode([ 'a' => 'divan', 'b'=> 'shampon', 'c'=> 'tavolinë', 'd'=> 'dush' ]),
            'answer' => 'c',
            'topic_id' => 27 //nouns
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "window"?',
            'choices' => json_encode([ 'a' => 'karrige', 'b'=> 'filxhan', 'c'=> 'bukë', 'd'=> 'dritare' ]),
            'answer' => 'd',
            'topic_id' => 27 //nouns
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the verb for "work"?',
            'choices' => json_encode([ 'a' => 'besoj', 'b'=> 'punoj', 'c'=> 'jetoj', 'd'=> 'lexoj' ]),
            'answer' => 'b',
            'topic_id' => 28 //verbs
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the verb for "listen"?',
            'choices' => json_encode([ 'a' => 'dëgjoj', 'b'=> 'laj', 'c'=> 'blej', 'd'=> 'kuptoj' ]),
            'answer' => 'a',
            'topic_id' => 28 //verbs
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the verb for "watch"?',
            'choices' => json_encode([ 'a' => 'shkoj', 'b'=> 'shkruaj', 'c'=> 'shikoj', 'd'=> 'filloj' ]),
            'answer' => 'c',
            'topic_id' => 28 //verbs
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the verb for "learn"?',
            'choices' => json_encode([ 'a' => 'mësoj', 'b'=> 'filloj', 'c'=> 'shikoj', 'd'=> 'takoj' ]),
            'answer' => 'a',
            'topic_id' => 28 //verbs
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "often"?',
            'choices' => json_encode([ 'a' => 'deri', 'b'=> 'shpesh', 'c'=> 'zakonisht', 'd'=> 'atje' ]),
            'answer' => 'b',
            'topic_id' => 29 //adverbs
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "usually"?',
            'choices' => json_encode([ 'a' => 'zakonisht', 'b'=> 'pak', 'c'=> 'disa', 'd'=> 'bashkë' ]),
            'answer' => 'a',
            'topic_id' => 29 //adverbs
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "some"?',
            'choices' => json_encode([ 'a' => 'apo', 'b'=> 'pak', 'c'=> 'drejt', 'd'=> 'disa' ]),
            'answer' => 'd',
            'topic_id' => 29 //adverbs
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "inside"?',
            'choices' => json_encode([ 'a' => 'jashtë', 'b'=> 'brenda', 'c'=> 'afër', 'd'=> 'zakonisht' ]),
            'answer' => 'b',
            'topic_id' => 29 //adverbs
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "little"?',
            'choices' => json_encode([ 'a' => 'i/e vjetër', 'b'=> 'i/e vogël', 'c'=> 'i/e sëmure', 'd'=> 'i/e lirë' ]),
            'answer' => 'b',
            'topic_id' => 30 //adjectives
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "old"?',
            'choices' => json_encode([ 'a' => 'i/e trishtuar', 'b'=> 'i/e mirë', 'c'=> 'i/e sëmure', 'd'=> 'i/e vjetër' ]),
            'answer' => 'd',
            'topic_id' => 30 //adjectives
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "sick"?',
            'choices' => json_encode([ 'a' => 'i/e sëmure', 'b'=> 'i/e vjetër', 'c'=> 'i/e madh(e)', 'd'=> 'i/e vogël' ]),
            'answer' => 'a',
            'topic_id' => 30 //adjectives
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the name for "sad"?',
            'choices' => json_encode([ 'a' => 'i/e mirë', 'b'=> 'i/e lirë', 'c'=> 'i/e vogël', 'd'=> 'i/e trishtuar' ]),
            'answer' => 'd',
            'topic_id' => 30 //adjectives
        ]);
    }
}
