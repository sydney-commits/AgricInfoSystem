<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // foreach (range(1,10) as $index) {
        //     DB::table('prices')->insert([
        //         "name" => $faker->name,
        //         "category" => $faker->category,
        //         "ush" => $faker->ush,
        //         "tsh" => $faker->tsh,
        //         "ksh" => $faker->ksh,

                

        //     ]);
        // }
        \App\Models\Price::factory(10)->create();

        // \App\Models\Price::factory()->create([
        //     'name' => 'Test User',
        //     'category' => 'test@example.com',
        //     'ush'=> Str::random(5),
        //     'tsh'=> Str::random(5),
        //     'ksh'=> Str::random(5),
        // ]);
    }
}
