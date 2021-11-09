<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<100; $i++){
            $newHoliday = new Holiday();
            $newHoliday->code = $faker->isbn10();
            $newHoliday->city_departure = $faker->city();
            $newHoliday->date_departure = $faker->dateTimeThisMonth();
            $newHoliday->city_arrival = $faker->city();
            $newHoliday->date_return =  $faker->dateTimeBetween('+1 week', '+4 week');
            $newHoliday->description =  $faker->text(100);
            $newHoliday->price = $faker->randomFloat(2, 200, 7000);
            $newHoliday->name_hotel = $faker->streetName();
            $newHoliday->number_stars = $faker->numberBetween(1, 5);
            $newHoliday->save();
        }
        
    }
}
