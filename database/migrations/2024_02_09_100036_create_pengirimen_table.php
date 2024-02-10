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
        Schema::create('pengirimans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('subjek', 100)->nullable(false);
            $table->string('nomor_resi', 100)->nullable(false)->unique();
            $table->string('nama_pengirim', 100)->nullable(false);
            $table->text('alamat_pengirim')->nullable(false);
            $table->string('nama_penerima', 100)->nullable(false);
            $table->text('alamat_penerima')->nullable(false);
            $table->integer('berat')->nullable(false);
            $table->string('status', 100)->nullable(false)->default('sedang dikirim');
            $table->bigInteger('pengirim_id')->unsigned()->nullable(true);
            $table->foreign('pengirim_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirimans');
    }
};
