<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1; $i <= 15 ; $i++) {

            $id = DB::table('posts')->insertGetId([
                'title' => $faker->word,
                'description' => $faker->paragraph(2),
                'content' => $faker->paragraph(20),
                // 'price' => mt_rand(5*10, 1000*10) / 10, //mt_rand ($min*10, $max*10) / 10
                'image' => 'default.png',
                'user_id' => 1,
                'editor_pick' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('category_post')->insert([
                'category_id' => rand(1,5),
                'post_id' => $id,
            ]);
        }

        // Da bi imali vise kategorija u jednom proizvodu jer je veza vise-vise
        for ($i=1; $i <= 10 ; $i++) {
            DB::table('category_post')->insert([
                'category_id' => rand(1,5),
                'post_id' => rand(1,15),
            ]);
        }
    }
}
