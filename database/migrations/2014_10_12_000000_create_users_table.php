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
            $table->string('password');
            $table->string('phoneNum');
            $table->date('birthday');
            $table->string('sex');
            $table->string('address');
            $table->integer('roleId');
            $table->string('linkCv');
            $table->string('companyName');
            $table->string('companyAddress');
            $table->string('linkLogo');
            $table->integer('positionId');
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
        Schema::dropIfExists('users');
    }
}
