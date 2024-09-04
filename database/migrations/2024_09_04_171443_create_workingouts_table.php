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
        Schema::create('workingouts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('location', 20);
            $table->unsignedBigInteger('id_lesson');
            $table->unsignedBigInteger('id_teacher');
            $table->unsignedBigInteger('id_student');
            $table->boolean('present')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workingouts');
    }
};
