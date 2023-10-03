<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class teacherController extends Controller
{
    //view all record
    public function showTeacher(){
        $teachers=DB::table('teachers')->get();
        return view('teachersRecord',['data'=>$teachers]);
    }

    //View single record
    public function singleTeacher(string $id){
        $teacher=DB::table('teachers')->where('id',$id)->get();
        return view('teacher',['data'=>$teacher]);
    }

    //Add New Record
    public function addRecord(Request $req){
        $add=DB::table('teachers')->insert([
            "name" => $req->username,
            "email" => $req->useremail,
            "age" => $req->userage,
            "city" => $req->usercity,
        ]);
        if($add){
            return redirect()->route('home');
        }
    }


    public function updateRecord(Request $req ,$id){
        $update=DB::table('teachers')->where('id', $id)->update([
            "name" => $req->username,
            "email" => $req->useremail,
            "age" => $req->userage,
            "city" => $req->usercity,
        ]);
        if($update){
            return redirect()->route('home');
        }
    }

    public function updatePage(string $id){
        // $update=DB::table('teachers')->where('id',$id)->get();
        $update=DB::table('teachers')->find($id);
        // return $update;
        return view('updateteachers',['data'=> $update]);
    }

    //Delete Perticular Record
    public function deleteRecord(string $id){
        $delete=DB::table('teachers')->where('id',$id)->delete();
        
        if($delete){
            return redirect()->route('home');
        }
    }
}
