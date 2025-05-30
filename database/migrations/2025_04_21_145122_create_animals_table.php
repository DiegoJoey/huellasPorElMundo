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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('breed');
            $table->integer('age');
            $table->string('time_in_shelter');
            $table->text('description');
            $table->string('image_path');
            $table->enum('state', ['shelter', 'adopted'])->default('shelter');
            //$table->foreignId('created_by')->constrained('users'); // Relación con 'users'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
