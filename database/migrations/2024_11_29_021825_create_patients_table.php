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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('document_number')->nullable();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('last_name');
            $table->string('second_surname')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('state_civil', 20)->nullable(); 
            $table->string('emergency_contact')->nullable(); 
            $table->string('blood_group', 10)->nullable(); 
            $table->text('additional_notes')->nullable();
            $table->unsignedBigInteger('user_id')->unique(); // Relación uno a uno con 'users'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
