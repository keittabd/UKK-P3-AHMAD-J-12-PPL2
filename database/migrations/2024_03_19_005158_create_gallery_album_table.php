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
        Schema::create('gallery_album', function (Blueprint $table) {
            $table->id();
            $table->integer('album_ID');
            $table->char('nama_album');
            $table->text('deskripsi');
            $table->date('tanggal_dibuat');
            $table->integer('user_iD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_album');
    }
};
