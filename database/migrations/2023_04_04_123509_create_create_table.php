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
        Schema::create('create', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable;
            $table->String('email')->nullable;
            $table->String('phone')->nullable;
            $table->String('judul')->nullable;
            $table->String('deskripsi')->nullable();
            $table->String('gambar')->nullable();;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create');
    }
};
