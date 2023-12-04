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
            //id
            $table->id();
            //user type 
            //$table->string('user_type');
            //$table->integer('user_type');
            //first name
            $table->string('first_name');
            //last name
            $table->string('last_name');
            //birthdate
            $table->date('birthdate');
            //gender
            $table->enum('gender', ['Male', 'Female', 'Prefer not to say']);
            //email
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            //password
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
