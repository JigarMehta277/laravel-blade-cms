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
        Schema::create('learning', function (Blueprint $table) {
            $table->id();
            $table->string('clgname');
            $table->string('degree')->nullable();
            $table->string('course')->unique();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('project_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
