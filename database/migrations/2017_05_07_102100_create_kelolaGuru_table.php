<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelolaGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('nip');
            $table->string('nama');
            $table->string('password');
            $table->enum('status',array('admin','guru'));
            $table->enum('mapel',array('Matematika','Bahasa Indonesia','Sejarah','Ekonomi','Biologi','Fisika','Kimia','Geografi'));
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
        Schema::dropIfExists('employees');
    }
}
