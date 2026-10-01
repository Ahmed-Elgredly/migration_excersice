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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique()->strtolower();
            $table->string('password')->min(8);
            $table->enum('gender', ['male', 'female']);
            $table->integer('age');
            $table->string('phone')->unique();
            $table->string('image')->nullable();
            $table->boolean('online')->default(false);
            $table->boolean('ban')->default(false);
            $table->string('remember_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
