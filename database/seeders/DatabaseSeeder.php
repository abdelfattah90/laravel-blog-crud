<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $user = User::create([
            'name' => 'Ahmed User',
            'email' => 'ahmed@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('ahmedahmed'),
            'remember_token' => Str::random(10)
        ]);

        Category::create(['name' => 'JavaScript', 'slug' => 'js']);
        Category::create(['name' => 'PHP', 'slug' => 'php']);
        Category::create(['name' => 'Python', 'slug' => 'py']);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'NodeJS',
            'slug' => 'node-js',
            'content' => 'Nodejs is javascript runtime written by C++ ',
        ]);
        Post::create([
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'Laravel',
            'slug' => 'laravel',
            'content' => 'Laravel is php framework',
        ]);
        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Express',
            'slug' => 'express',
            'content' => 'Nodejs framework',
        ]);
        Post::create([
            'category_id' => 3,
            'user_id' => 1,
            'title' => 'Flash',
            'slug' => 'flash',
            'content' => 'Python framework',
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'ThreeJs',
            'slug' => 'three-js',
            'content' => '3D Game',
        ]);

        Post::create([
            'category_id' => 3,
            'user_id' => 1,
            'title' => 'Django',
            'slug' => 'diango',
            'content' => 'Django is a Python-based free and open-source web framework',
        ]);
    }
}
