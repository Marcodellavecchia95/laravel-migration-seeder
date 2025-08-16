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

        for ($i = 0; $i < 20; $i++) {

            $newTrain = new Train();
            $newTrain->company = $faker->company;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->time;
            $newTrain->departure_date = $faker->date;
            $newTrain->arrival_time = $faker->time;
            $newTrain->train_code = $faker->bothify("??###???#");
            $newTrain->train_total_coaches = $faker->numberBetween(5, 12);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->is_deleted = $faker->numberBetween(0, 1);


            $newTrain->save();
        }
    }
}
