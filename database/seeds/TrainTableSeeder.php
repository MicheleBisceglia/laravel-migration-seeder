<?php
use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i = 0; $i < 10; $i++) {
        $train = new Train();
        $train->company = 'Trenitalia';
        $train->departure_station = 'Stazione di Foggia';
        $train->arrival_station = 'Stazione di Bolzano';
        $train->arrival_time = $faker -> dateTimeBetween('-0.5 day', '+0.5 day');
        $train->departure_time = $faker -> time('H:i');
        $train->train_code = rand(10000, 99999);
        $train->wagon_number = $faker->numberBetween(1, 22);
        $train->on_time = $faker -> boolean();
        $train->delete = $faker -> boolean();
        $train->save();
        }
    }
}
