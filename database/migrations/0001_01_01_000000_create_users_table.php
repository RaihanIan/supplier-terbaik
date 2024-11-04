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
        // Users Table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255);
            $table->string('password', 255);
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });

        // Mitra Table
        Schema::create('mitra', function (Blueprint $table) {
            $table->integer('id_mitra', 11)->primary();
            $table->string('name_mitra', 255);
            $table->string('logo_mitra', 255);
            $table->timestamps();
        });

// Migrasi untuk tabel harga
Schema::create('harga', function (Blueprint $table) {
    $table->id(); // Menggunakan $table->id() untuk membuat id_harga auto_increment
    $table->string('harga', 255);
    $table->timestamps();
});

// Migrasi untuk tabel jenis_kain
Schema::create('jenis_kain', function (Blueprint $table) {
    $table->id(); // Menggunakan $table->id() untuk membuat id_jenis auto_increment
    $table->string('jenis_kain', 255);
    $table->timestamps();
});

// Migrasi untuk tabel ketersediaan
Schema::create('ketersediaan', function (Blueprint $table) {
    $table->id(); // Menggunakan $table->id() untuk membuat id_ketersediaan auto_increment
    $table->string('ketersediaan_barang', 255);
    $table->timestamps();
});

// Migrasi untuk tabel supplier (pastikan tabel yang dirujuk sudah ada)
Schema::create('supplier', function (Blueprint $table) {
    $table->id(); // Menggunakan $table->id() untuk membuat id_supplier auto_increment
    $table->string('nama_supplier', 255)->unique();
    $table->string('alamat', 255);
    $table->string('email', 255);
    $table->string('cat_tambahan', 255)->nullable();
    $table->unsignedBigInteger('id_harga');
    $table->unsignedBigInteger('id_jenis');
    $table->unsignedBigInteger('id_ketersediaan');
    $table->timestamps();

    // Foreign keys
    $table->foreign('id_harga')->references('id')->on('harga')->onUpdate('cascade')->onDelete('cascade');
    $table->foreign('id_jenis')->references('id')->on('jenis_kain')->onUpdate('cascade')->onDelete('cascade');
    $table->foreign('id_ketersediaan')->references('id')->on('ketersediaan')->onUpdate('cascade')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('mitra');
        Schema::dropIfExists('supplier');
        Schema::dropIfExists('harga');
        Schema::dropIfExists('jenis_kain');
        Schema::dropIfExists('ketersediaan');
    }
};
