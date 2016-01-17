<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_alumni', 150);
            $table->string('ttl', 150);
            $table->text('alamat');
            $table->string('tahun_lulus', 10);
            $table->string('email', 100);
            $table->string('nohp', 15);
            $table->string('pekerjaan', 150);
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
        Schema::drop('alumni');
    }
}
