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
        Schema::create('cloud', function (Blueprint $table) {
            $table->id();
            $table->string('file')->references('file')->on('post');
            $table->string('username');
            $table->foreign('username')->references('username')->on('users');
            $table->text('title')->references('title')->on('post');
            $table->text('komentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloud');
    }
};
