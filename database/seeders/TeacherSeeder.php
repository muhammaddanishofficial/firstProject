<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teacher;
use Illuminate\Support\Facades\File;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(path:'database/JSON/teachers.json');
        $teachers= collect(json_decode($json)); //array form

        $teachers->each(function($teacher){
            teacher::create([
                'name'=>$teacher->name,
                'email'=>$teacher->email,
                'age'=>$teacher->age,
                'city'=>$teacher->city
            ]);
        });

    }
}
