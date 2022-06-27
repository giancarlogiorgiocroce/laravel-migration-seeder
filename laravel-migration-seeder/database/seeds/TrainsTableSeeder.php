<?php

use App\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->word();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_number = $faker->randomNumber(5, true);
            $new_train->train_carriage_quantity = $faker->numberBetween(2, 20);
            $new_train->is_on_time = $faker->boolean();
            $new_train->is_cancelled = $faker->boolean();
            $new_train->save();
        }
    }
}
