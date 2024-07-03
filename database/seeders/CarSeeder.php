<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Car::create([
          'id' =>1,
           'name' => 'Lamborghini',
           'photo'=> 'lamborghini-01.jpg',
           'type_id'=> 1,
           'cost_per_day' => 500000,
           'year' => 2020,
           'license_plate' => 'C 1264 ABC',

        ]);

        Car::create([
          'id' =>2,
           'name' => 'Terios',
           'photo'=> 'mobil-02.jpg',
           'type_id'=> 2,
           'cost_per_day' => 700000,
           'year' => 2020,
           'license_plate' => 'A 1734 ABC',

        ]);

        Car::create([
          'id' =>3,
           'name' => 'Inova Reborn',
           'photo'=> 'mobil-03.jpg',
           'type_id'=> 3,
           'cost_per_day' => 500000,
           'year' => 2020,
           'license_plate' => 'B 4 BI',

        ]);

        Car::create([
          'id' =>4,
           'name' => 'Fortuner',
           'photo'=> 'mobil-04.jpg',
           'type_id'=> 4,
           'cost_per_day' => 500000,
           'year' => 2020,
           'license_plate' => 'F 1834 ABC',

        ]);

        Car::create([
          'id' =>5,
           'name' => 'HR-V',
           'photo'=> 'mobil-05.jpg',
           'type_id'=> 5,
           'cost_per_day' => 500000,
           'year' => 2021,
           'license_plate' => 'C 1289 ACD',

        ]);

        Car::create([
          'id' =>6,
           'name' => 'Xpander',
           'photo'=> 'mobil-06.jpg',
           'type_id'=> 6,
           'cost_per_day' => 500000,
           'year' => 2019,
           'license_plate' => 'C 1256 AGC',

        ]);

        Car::create([
          'id' =>7,
           'name' => 'Luxio',
           'photo'=> 'mobil-07.jpg',
           'type_id'=> 7,
           'cost_per_day' => 500000,
           'year' => 2023,
           'license_plate' => 'B 1234 ABC',

        ]);

        Car::create([
          'id' =>8,
           'name' => 'Suzuki Carry',
           'photo'=> 'mobil-08.jpg',
           'type_id'=> 8,
           'cost_per_day' => 500000,
           'year' => 2010,
           'license_plate' => 'B 1234 ABC',

        ]);

           }
}
