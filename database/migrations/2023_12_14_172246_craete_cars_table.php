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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('car_name');
            $table->string('dascription');
            $table->string('purchase');
            $table->decimal('price');
            // $table->foreignId('user_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');//category_id is the primary key in the other table and categories is the table neme
            $table->SoftDeletes();

        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
