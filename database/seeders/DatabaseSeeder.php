<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post as Post;
use App\Models\Comment as Comment;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $status_sequence = new sequence(
            ['status' => 'draft'],
            ['status' => 'publish'],
        );

        Post::factory(10)->state( $status_sequence)->create();
        Comment::factory(5)->create();
        
    }
}
