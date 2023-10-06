<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/JSON/categories.json');
        $categories= collect(json_decode($json)); //array form

        $categories->each(function($category){
            Categories::create([
                "category" => $category->category,
            ]);
        });
    }
}
