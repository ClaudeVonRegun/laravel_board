<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
          [
            'user_id' => '1',
            'tweet' => 'Just had a great lunch!',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '2',
            'tweet' => 'Loving the new season of my favorite show.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '3',
            'tweet' => 'What a beautiful day!',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '4',
            'tweet' => 'Excited about the weekend plans.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '5',
            'tweet' => 'Just finished reading an amazing book.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '6',
            'tweet' => 'Feeling blessed today.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '7',
            'tweet' => 'Can’t wait for the holidays.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '8',
            'tweet' => 'Had a great workout session this morning.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '9',
            'tweet' => 'Learning something new every day.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => '10',
            'tweet' => 'Coffee is life.',
            'created_at' => now(),
            'updated_at' => now(),
          ],
        ]);
    }
}
