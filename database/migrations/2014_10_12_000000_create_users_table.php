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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->date('birth_date');
            $table->enum('gender', ['Female', 'Male']);
            $table->string('password');
            $table->string('city');
            $table->string('phone',12);
            $table->rememberToken();
            $table->timestamps();
            // (#id,username,email, role, birth_date, gender,password, city, phone)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
