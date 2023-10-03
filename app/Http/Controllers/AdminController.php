<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //view all hostels
    public function ShowAllHostels(){
        $hostels=DB::table('hostels')->get();
        return view('admin.dashboard',['data'=>$hostels]);
    }

     //View single record
     public function ShowOneHostel(string $id){
        $hostels=DB::table('hostels')->where('id',$id)->get();
        return view('admin.viewHostel',['data'=>$hostels]);
    }

    //Add New Record
    public function AddHostel(Request $req){
        $add=DB::table('hostels')->insert([
            "hostel_name" => $req->hostelName,
            "city" => $req->city,
            "vacancies" => $req->vacancies,
            "price" => $req->price,
            "discription" => $req->discription,
            "address" => $req->address,
            "phone" => $req->phone,
            "email" => $req->email,
        ]);
        if($add){
            return redirect()->route('dashboard');
        }
    }


    public function UpdateHostel(Request $req ,$id){
        $update=DB::table('hostels')->where('id', $id)->update([
            "hostel_name" => $req->hostelName,
            "city" => $req->city,
            "vacancies" => $req->vacancies,
            "price" => $req->price,
            "discription" => $req->discription,
            "address" => $req->address,
            "phone" => $req->phone,
            "email" => $req->email,
        ]);
        if($update){
            return redirect()->route('dashboard');
        }
    }

    public function UpdateHostelData(string $id){
        // $update=DB::table('teachers')->where('id',$id)->get();
        $update=DB::table('hostels')->find($id);
        // return $update;
        return view('admin.forms.updateHostel',['data'=> $update]);
    }

    //Delete Perticular Record
    public function DeleteHostel(string $id){
        $delete=DB::table('hostels')->where('id',$id)->delete();
        
        if($delete){
            return redirect()->route('dashboard');
        }
    }
}
