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
        Schema::create('_table_kehadiran', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id');
            $table->date('jam_masuk');
            $table->date('jam_keluar');
            $table->date('coba');
            $table->enum('status',['A','N','W','S']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_table_kehadiran');
    }
};
