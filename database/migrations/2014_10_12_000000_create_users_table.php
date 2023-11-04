<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role',  ['pemohon', 'pemeriksa', 'admin'])->default('pemohon');
            $table->string('password')->nullable();
            $table->string('nama_perusahaan')->nullable();;
            $table->string('siup')->nullable();;
            $table->string('nib')->nullable();;
            $table->string('alamat')->nullable();;
            $table->string('pic')->nullable();;
            $table->string('no_telepon')->nullable();;
            $table->string('file_akte')->nullable();;
            $table->string('file_nib')->nullable();;
            $table->string('file_npwp')->nullable();;
            $table->string('file_siup')->nullable();;
            $table->boolean('approved')->default(false); // Tambahkan kolom untuk approval dari admin
            // $table->boolean('form_btn')->default(false); // Tambahkan kolom untuk form_btn dari admin
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
