<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\Models\Article;
use \App\Models\User;

class ArticlesSeeder extends Seeder {
    public function run(): void {
        $faker = Faker::create('es_ES');
        
        for ($i = 0; $i < 100; $i++) {
            Article::create([
                'title'  => $faker->sentence,
                'body'  => $faker->paragraph,
                'date'  => $faker->date('Y-m-d', '2010-01-01'),
                'user_id' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
