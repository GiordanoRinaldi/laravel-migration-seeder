<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newHoliday = new Holiday();
        $newHoliday->code = "AA001475";
        $newHoliday->city_departure = "Roma";
        $newHoliday->date_departure = "2021-07-14";
        $newHoliday->city_arrival = "Afganistan";
        $newHoliday->date_return =  "2022-01-01";
        $newHoliday->description =  "Vacanza col botto!";
        $newHoliday->price = "1499.99";
        $newHoliday->name_hotel = "Halak Bar";
        $newHoliday->number_stars = 4;
        $newHoliday->save();
    }
}
