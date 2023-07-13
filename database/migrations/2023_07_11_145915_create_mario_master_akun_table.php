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
        Schema::create('mario_master_akun', function (Blueprint $table) {
            $table->string('nomor_akun', 10);
            $table->string('nama_akun', 40);
            $table->string('tipe', 30);
            $table->string('induk', 30);
            $table->string('level', 5);
            $table->string('kelompok', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mario_master_akun');
    }
};
