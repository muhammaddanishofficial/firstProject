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
            Schema::create('teachers', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('name',30);
                $table->string('email')->unique();
                $table->integer('age');
                $table->string('city');
            });
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
