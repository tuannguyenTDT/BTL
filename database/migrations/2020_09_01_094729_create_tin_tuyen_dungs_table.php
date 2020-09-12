<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTuyenDungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tuyen_dungs', function (Blueprint $table) {
            $table->id();
            $table->integer('idUser');
            $table->string('position');
            $table->string('salary');
            $table->timestamp('time');
            $table->string('experience');
            $table->string('sex');
            $table->date('endDate');
            $table->string('content');
            $table->integer('idJob');
            $table->integer('activeFlag');
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
        Schema::dropIfExists('tin_tuyen_dungs');
    }
}
