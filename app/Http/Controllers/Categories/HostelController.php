<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostelController extends Controller
{
        // View all hostels
    // public function ShowAllHostels(){
    //     $hostels = DB::table('hostels')->get();
    //     return view('categories.hostels.hostel',['data' => $hostels]);
    // }

        // View a specific hostel
        public function ShowHostel(string $city,$slug)
        {
            // return dd($city,$slug);
            // Query the database with the specified conditions
            // try {
                return dd($city,$slug);
                $hostels = DB::table('hostels')
                    ->where('city', $city)
                    ->where('slug', $slug)
                    ->get();
                return view('categories.hostels.singleHostel', ['data' => $hostels]);
            // } catch (\Exception $e) {
                // Log or handle the exception
                // Log::error($e->getMessage());
                // return an error response
                // return response()->view('errors.500', [], 500);
            }
        }
        
        

    
// }
