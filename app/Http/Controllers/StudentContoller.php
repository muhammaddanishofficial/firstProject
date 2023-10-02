<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentContoller extends Controller
{
    public function showStudent(){
        $students=DB::table('students')->get();
        return view('studentRecord',['data'=>$students]);



        // foreach($students as $student){
        //     echo $student->name .'-';
        //     echo $student->email .'-';
        //     echo $student->age .'-';
        //     echo $student->city .'<br>';
        // }
    }
}
