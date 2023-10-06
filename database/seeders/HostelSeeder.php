<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hostel;
use Illuminate\Support\Facades\File;


class HostelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/JSON/hostels.json');
        $hostels= collect(json_decode($json)); //array form

        $hostels->each(function($hostel){
            Hostel::create([
                "hostel_name" => $hostel->hostelName,
                "vacancies" => $hostel->vacancies,
                "price" => $hostel->price,
                "discription" => $hostel->discription,
                "address" => $hostel->address,
                "phone" => $hostel->phone,
                "email" => $hostel->email,
                "slug" => $hostel->slug,
                "category" => $hostel->category,
                "city" => $hostel->city,
            ]);
        });
    }
}
