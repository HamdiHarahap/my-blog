<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'komentar' => 'aku kesini karena suka sama tulisan-tulisannya',
            'user_id' => 1,
            'blog_id' => 1,
        ]);

        Comment::create([
            'komentar' => 'semangat kak!! nice article',
            'user_id' => 1,
            'blog_id' => 2,
        ]);
    }
}
