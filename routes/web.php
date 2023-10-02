<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\users;
use App\Http\Controllers\teacherController;
use Illuminate\Support\Facades\Route;



Route::controller(teacherController::class)->group(function(){
    Route::get('/','showTeacher')->name('home');
    Route::get('/teacher/{id}','singleTeacher')->name('view.teacher');
    Route::POST('/add','addRecord')->name('addTeacher');
    Route::POST('/update/{id}','updateRecord')->name('update.record');
    Route::get('/updatepage/{id}','updatePage')->name('update.page');
    Route::get('/delete/{id}','deleteRecord')->name('delete.record');
});

Route::View('/new','addteachers')->name('new');





// Route::get('/about', [users::class,'showAbout']);

// Route::get('/posts', function () {
//     return view('post');
// })->name('allposts');

// Route::get('/post/one', function () {
//     return view('post');
// });


// Route::prefix('hostels')->group(function(){
//     Route::get('/balochhostel', function () {
//         return view('balochhostel');
//     });
//     Route::get('/chandiohostel', function () {
//         return view('chandiohostel');
//     });
// });






require __DIR__.'/auth.php';
