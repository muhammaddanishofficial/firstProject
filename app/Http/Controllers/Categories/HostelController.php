<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostelController extends Controller
{
     //view all hostels
     public function ShowAllHostels(){
        $hostels=DB::table('hostels')->get();
        return view('categories.hostels.hostel',['data'=>$hostels]);
    }

     //View single record
     public function ShowOneHostel(string $id){
        $hostels=DB::table('hostels')->where('hostel_name',$id)->get();
        return view('categories.hostels.singleHostel',['data'=>$hostels]);
    }
}
