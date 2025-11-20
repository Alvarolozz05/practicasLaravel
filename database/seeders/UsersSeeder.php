<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\Models\User;

class UsersSeeder extends Seeder {
    public function run(): void {
        $faker = Faker::create('es_ES');

        for ($i = 0; $i < 100; $i++) {
            User::create([
                'username'  => $faker->username,
                'email'      => $faker->unique()->safeEmail,
                'password'   => $faker->password,
                'role'       => $faker->randomElement(['admin', 'user']),
            ]);
        }
    }
}
