<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'Admin1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password33')
        ]);


        // User::factory(3)->create();

        Category::create([
            'name' => 'Aktivitas',
            'slug' => 'aktivitas',
        ]);

        Category::create([
            'name' => 'Orang Tua',
            'slug' => 'orang-tua',
        ]);

        Category::create([
            'name' => 'Blog',
            'slug' => 'blog',
        ]);

        Category::create([
            'name' => 'Murid',
            'slug' => 'murid',
        ]);
        Category::create([
            'name' => 'Informasi',
            'slug' => 'informasi',
        ]);

        // Post::factory(20)->create();

       
    }
}