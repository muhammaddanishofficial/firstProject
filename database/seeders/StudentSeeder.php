<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;



class StudentSeeder extends Seeder
{
    public function run(): void
    {   
        $json = File::get(path:'database/JSON/student.json');
        $students= collect(json_decode($json)); //array form

        $students->each(function($student){
            student::create([
                'name'=>$student->name,
                'email'=>$student->email,
                'age'=>$student->age,
                'city'=>$student->city
            ]);
        });





        // $students= collect(
        //     [
        //         [
        //             'name'=>'Daniyal',
        //             'email'=>'daniyal@gmail.com'
        //         ],
        //         [
        //             'name'=>'Daniyal',
        //             'email'=>'daniyal@gmail.com'
        //         ],
        //         [
        //             'name'=>'Daniyal',
        //             'email'=>'daniyal@gmail.com'
        //         ],
        //         [
        //             'name'=>'Danish',
        //             'email'=>'daniyal@gmail.com'
        //         ],
        //     ]
        //     );

        //     $students->each(function($student){
        //         student::create($student);
        //     });


        // for($i=1; $i<=1000; $i++){
            //    student::create([
            //     'name'=>fake()->name(),
            //     'email'=>fake()->email()
            //    ]); 
            // }
    }
}
