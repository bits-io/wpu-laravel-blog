<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Sandhika',
        //     'email' => 'sandhika@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        User::create([
            'name' => 'dobith',
            'username' => 'dobith',
            'email' => 'dobith@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum Pertama',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla maxime consequuntur, corporis tempore veritatis iusto modi! Omnis labore saepe qui esse doloribus ea quisquam doloremque recusandae ut ad tenetur error quibusdam pariatur porro nesciunt dicta quae vero cupiditate, illo eos nulla incidunt! Officia temporibus aspernatur consequatur, magni adipisci itaque consequuntur facere, fugit ducimus, deleniti rerum quis deserunt facilis reiciendis vel! Nam explicabo tempore quae maxime adipisci voluptates veniam doloribus. Quisquam dignissimos, necessitatibus voluptas officiis perspiciatis beatae! Temporibus molestias praesentium error impedit culpa voluptate quibusdam tempora, magnam similique unde officia cupiditate illo quam sunt, aut deleniti! Cumque vitae veniam reiciendis minus doloremque. Accusamus optio aspernatur alias quasi consequatur ullam ex quas modi nihil, molestias nulla doloremque minima consectetur animi? Voluptas, praesentium!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum Ke Dua',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla maxime consequuntur, corporis tempore veritatis iusto modi! Omnis labore saepe qui esse doloribus ea quisquam doloremque recusandae ut ad tenetur error quibusdam pariatur porro nesciunt dicta quae vero cupiditate, illo eos nulla incidunt! Officia temporibus aspernatur consequatur, magni adipisci itaque consequuntur facere, fugit ducimus, deleniti rerum quis deserunt facilis reiciendis vel! Nam explicabo tempore quae maxime adipisci voluptates veniam doloribus. Quisquam dignissimos, necessitatibus voluptas officiis perspiciatis beatae! Temporibus molestias praesentium error impedit culpa voluptate quibusdam tempora, magnam similique unde officia cupiditate illo quam sunt, aut deleniti! Cumque vitae veniam reiciendis minus doloremque. Accusamus optio aspernatur alias quasi consequatur ullam ex quas modi nihil, molestias nulla doloremque minima consectetur animi? Voluptas, praesentium!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum Ke Tiga',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla maxime consequuntur, corporis tempore veritatis iusto modi! Omnis labore saepe qui esse doloribus ea quisquam doloremque recusandae ut ad tenetur error quibusdam pariatur porro nesciunt dicta quae vero cupiditate, illo eos nulla incidunt! Officia temporibus aspernatur consequatur, magni adipisci itaque consequuntur facere, fugit ducimus, deleniti rerum quis deserunt facilis reiciendis vel! Nam explicabo tempore quae maxime adipisci voluptates veniam doloribus. Quisquam dignissimos, necessitatibus voluptas officiis perspiciatis beatae! Temporibus molestias praesentium error impedit culpa voluptate quibusdam tempora, magnam similique unde officia cupiditate illo quam sunt, aut deleniti! Cumque vitae veniam reiciendis minus doloremque. Accusamus optio aspernatur alias quasi consequatur ullam ex quas modi nihil, molestias nulla doloremque minima consectetur animi? Voluptas, praesentium!',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum Ke Empat',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla maxime consequuntur, corporis tempore veritatis iusto modi! Omnis labore saepe qui esse doloribus ea quisquam doloremque recusandae ut ad tenetur error quibusdam pariatur porro nesciunt dicta quae vero cupiditate, illo eos nulla incidunt! Officia temporibus aspernatur consequatur, magni adipisci itaque consequuntur facere, fugit ducimus, deleniti rerum quis deserunt facilis reiciendis vel! Nam explicabo tempore quae maxime adipisci voluptates veniam doloribus. Quisquam dignissimos, necessitatibus voluptas officiis perspiciatis beatae! Temporibus molestias praesentium error impedit culpa voluptate quibusdam tempora, magnam similique unde officia cupiditate illo quam sunt, aut deleniti! Cumque vitae veniam reiciendis minus doloremque. Accusamus optio aspernatur alias quasi consequatur ullam ex quas modi nihil, molestias nulla doloremque minima consectetur animi? Voluptas, praesentium!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
