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
            $table->string('username');
            $table->string('password');
            $table->string('role')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });

        // Mitra Table
        Schema::create('mitra', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('users');
            $table->string('name_mitra');
            $table->string('logo_mitra');
            $table->timestamps();
        });

        // Harga Table
        Schema::create('harga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('harga');
            $table->timestamps();
        });
        
        // jenis_kain Table
        Schema::create('jenis_kain', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('jenis');
            $table->timestamps();
        });
        
        // ketersediaan Table
        Schema::create('ketersediaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('ketersediaan');
            $table->timestamps();
        });
        
        // Supplier Table
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            $table->string('nama_supplier')->unique();
            $table->string('email');
            $table->string('alamat');
            $table->string('logo_supplier');
            $table->foreignId('harga_id')->constrained('harga');
            $table->foreignId('jenis_id')->constrained('jenis_kain');
            $table->foreignId('ket_id')->constrained('ketersediaan');
            $table->timestamps();
        });

        // grade Table
        Schema::create('grade', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nama_supplier');
            $table->foreign('nama_supplier')->references('nama_supplier')->on('supplier')->onUpdate('cascade');
            $table->string('hasil');
            $table->timestamps();
        });
        
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('mitra');
        Schema::dropIfExists('harga');
        Schema::dropIfExists('jenis_kain');
        Schema::dropIfExists('ketersediaan');
        Schema::dropIfExists('supplier');
        Schema::dropIfExists('grade');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
