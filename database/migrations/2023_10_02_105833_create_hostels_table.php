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
        if(!Schema::hasTable('teachers')){
            Schema::create('hostels', function (Blueprint $table) {
                $table->id();
                $table->string('hostel_name',50);
                $table->string('city',30);
                $table->integer('vacancies');
                $table->integer('price');
                $table->string('discription',500);
                $table->string('address',100);
                $table->bigInteger('phone');
                $table->string('email')->unique();
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
