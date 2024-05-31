<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i = 0; $i < 100; $i++) {
            foreach (range(1, 10) as $index) {
                $departure_time = $faker->dateTimeBetween('+1 day', '+1 week');
                $arrival_time = $faker->dateTimeBetween($departure_time, '+1 week');

                $new_train = new Train();

                $new_train->company = $faker->company;
                $new_train->departure_station = $faker->city;
                $new_train->arrival_station = $faker->city;
                $new_train->departure_time = $faker->dateTimeBetween;
                $new_train->arrival_time = $faker->dateTimeBetween;

                $new_train->train_code = $faker->randomNumber(6);
                $new_train->num_carriages = $faker->numberBetween(1, 10);
                $new_train->on_time = $faker->boolean;
                $new_train->cancelled = $faker->boolean;
                $new_train->save();
            }
        }
    }
};
