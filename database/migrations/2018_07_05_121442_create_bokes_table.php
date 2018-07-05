<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBokesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bokes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content',191);
            $table->integer('user_id')->unsigned()->index();
            $table->integer('odai_id')->unsigned()->index();
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('odai_id')->references('id')->on('odais');
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
        Schema::dropIfExists('bokes');
    }
}
