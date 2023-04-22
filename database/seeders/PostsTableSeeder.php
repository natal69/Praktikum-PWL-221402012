<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = [];
        $faker = Faker::create();
        $i;

        for ($i=1; $i<=5; $i++) {
            $author_name = $faker->name;
            $author_email = $faker->safeEmail;
            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraphs(rand(3, 6), true),
                'author_name' => $author_name,
                'author_email' => $author_email,
                'created_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 month', 'now'),
            ]);
    }
}
