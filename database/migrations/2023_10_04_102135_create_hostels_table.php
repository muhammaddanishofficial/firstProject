<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(!Schema::hasTable('hostels')){
            Schema::create('hostels', function (Blueprint $table) {
                $table->id();
                $table->string('hostel_name',50);
                $table->integer('vacancies');
                $table->integer('price');
                $table->string('discription',500);
                $table->string('address',100);
                $table->bigInteger('phone');
                $table->string('email')->unique();
                $table->string('slug');
                $table->unsignedBigInteger('category');
                $table->unsignedBigInteger('city');
                $table->foreign('category')->references('id')->on('categories');
                $table->foreign('city')->references('id')->on('cities');
                $table->timestamps();
            });
        }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostels');
    }
};
