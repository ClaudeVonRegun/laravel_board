<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('replys')->insert([
          [
            'user_id' => '1',
            'tweet_id' => '2',
            'reply' => 'Sounds delicious!',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '2',
            'tweet_id' => '3',
            'reply' => 'Which show are you watching?',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '3',
            'tweet_id' => '4',
            'reply' => 'Indeed, it’s wonderful!',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '4',
            'tweet_id' => '5',
            'reply' => 'What are your plans?',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '5',
            'tweet_id' => '6',
            'reply' => 'I’d love to read that book too!',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '6',
            'tweet_id' => '7',
            'reply' => 'You are always so positive!',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '7',
            'tweet_id' => '8',
            'reply' => 'Any special plans for the holidays',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '8',
            'tweet_id' => '9',
            'reply' => 'Good for you! Keep it up.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '9',
            'tweet_id' => '10',
            'reply' => 'Learning is the key to success.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '10',
            'tweet_id' => '1',
            'reply' => 'Totally agree!',
            'created_at' => now(),
            'updated_at' => now(),
          ],
        ]);
    }
}
