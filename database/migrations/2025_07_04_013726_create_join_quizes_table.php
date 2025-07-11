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
        Schema::create('join_quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('codeJ')->unique();
            $table->foreign('codeJ')->references('codeQ')->on('code_quizzes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_quizzes');
    }
};
