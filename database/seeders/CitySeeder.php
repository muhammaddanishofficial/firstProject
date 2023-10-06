<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cities;
use Illuminate\Support\Facades\File;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/JSON/cities.json');
        $cities= collect(json_decode($json)); //array form

        $cities->each(function($city){
            Cities::create([
                "city" => $city->city,
            ]);
        });
    }
}
