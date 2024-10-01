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
        Schema::create('managemen_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('id_bidang');
            $table->string('nama_tugas');
            $table->string('nama_file')->nullable();
            $table->string('url_file')->nullable();
            $table->integer('tahun')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managemen_tugas');
    }
};
