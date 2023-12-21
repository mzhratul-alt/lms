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
        Schema::create('voters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ward_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('part_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('gender_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('voter_number');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('occupation');
            $table->date('dob');
            $table->mediumText('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voters');
    }
};
