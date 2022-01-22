<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Montirs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('montirs', function (Blueprint $table) {
            $table->id('id_montirs');
            $table->string('nama');
            $table->string('posisi');
            $table->string('perusahaan');
            $table->string('pengalaman');
            $table->integer('ulasan');
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
        //
    }
}
