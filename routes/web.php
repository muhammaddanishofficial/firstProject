<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\users;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\Categories\HostelController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::controller(teacherController::class)->group(function(){
    Route::get('/allteachers','showTeacher')->name('home');
    Route::get('/teacher/{id}','singleTeacher')->name('view.teacher');
    Route::POST('/add','addRecord')->name('addTeacher');
    Route::POST('/update/{id}','updateRecord')->name('update.record');
    Route::get('/updatepage/{id}','updatePage')->name('update.page');
    Route::get('/delete/{id}','deleteRecord')->name('delete.record');
});
Route::View('/new','addteachers')->name('new');


Route::controller(AdminController::class)->group(function(){
    Route::get('/dashboard','ShowAllHostels')->name('dashboard');
    Route::get('/hostel/{id}','ShowOneHostel')->name('view.hostel');
    Route::POST('/add','AddHostel')->name('add.hostel');
    Route::POST('/update/{id}','UpdateHostel')->name('update.hostel');
    Route::get('/updatedata/{id}','UpdateHostelData')->name('update.hostel.data');
    Route::get('/delete/{id}','DeleteHostel')->name('delete.hostel');
});
Route::View('/add','admin.forms.addHostel')->name('add'); //show hostel add form


Route::controller(HostelController::class)->group(function(){
    Route::get('/hostels','ShowAllHostels')->name('hostels');
    Route::get('/hostel/{name}','ShowOneHostel')->name('hostel');
});






require __DIR__.'/auth.php';
