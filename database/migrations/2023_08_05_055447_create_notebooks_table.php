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
        Schema::create('notebooks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description',2500)->nullable();
            $table->unsignedBigInteger('year_id');
            $table->unsignedBigInteger('creator_id');
            $table->timestamps();

            $table->foreign('year_id')->on('years')->references('id')->onDelete('CASCADE');
            $table->foreign('creator_id')->on('users')->references('id')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notebooks');
    }
};
