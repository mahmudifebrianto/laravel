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
        Schema::create('table__jabatan', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id');
            $table->string('Nama_jabatan');
            $table->decimal('tunjangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table__jabatan');
    }
};
