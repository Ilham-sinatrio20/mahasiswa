<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('images', 50);
            $table->date('tgl_lahir');
            $table->string('jurusan');
            $table->string('no_hp');
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable(); // Tambah kolom kelas_id
            $table->foreign('kelas_id')->references('id')->on('kelas'); // Tambah foreign key di kolom kelas_id
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
        Schema::dropIfExists('mahasiswa');
    }
}
