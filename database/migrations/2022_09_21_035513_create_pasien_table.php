<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('alamat', 50);
            $table->string('telp', 15);
            $table->string('rt_rw', 10);
            $table->bigInteger('kelurahan_id')->unsigned();
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan')->onDelete('restrict')->onUpdate('restrict');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
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
        Schema::dropIfExists('pasien');
    }
}
