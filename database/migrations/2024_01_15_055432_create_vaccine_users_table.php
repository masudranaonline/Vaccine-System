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
        Schema::create('vaccine_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nid');
            $table->string('email');
            $table->string('number');
            $table->unsignedBigInteger('center_id');
            $table->string('status')->default('Not vaccinated')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccine_users');
    }
};
