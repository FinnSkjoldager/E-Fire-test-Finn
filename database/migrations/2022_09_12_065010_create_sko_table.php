<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sko', function (Blueprint $table) {
            $table->id();
            $table->string('beskrivelse');
            $table->integer('storrelse');
            $table->string('farve');
            $table->double('pris');
            $table->integer('antal');
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
        Schema::dropIfExists('sko');
    }
};
