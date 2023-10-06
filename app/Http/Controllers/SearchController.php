<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $category = $request->input('category');
        $city = $request->input('city');
    
        $hostels = DB::table('hostels')
            ->join('categories', 'hostels.category', '=', 'categories.id')
            ->join('cities', 'hostels.city', '=', 'cities.id')
            // ->select('hostels.*','categories.category') // Select all columns from the hostels table
            ->where('categories.category','=',$category)
            ->where('cities.city','=',$city)
            // ->where('city', $city)
            ->get();
            // return dd($hostels);
        return view('categories.hostels.hostel', ['data' => $hostels]);
    }
    
    

}
