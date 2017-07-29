<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('ortu_id')->unsigned();
            $table->foreign('ortu_id')->references('id')
                    ->on('orang_tuas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->integer('umur');
            $table->string('alamat');
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
        Schema::dropIfExists('anaks');
    }
}
