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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->strtolower();
            $table->string('password')->min(8);
            $table->enum('gender', ['male', 'female']);
            $table->integer('age');
            $table->string('job_title');
            $table->string('city');
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->boolean('online')->default(false);
            $table->boolean('ban')->default(false);
            $table->string('remember_token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
