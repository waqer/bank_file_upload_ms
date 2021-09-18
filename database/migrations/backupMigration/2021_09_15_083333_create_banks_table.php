<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('bank_name');
            $table->bigInteger('client_id')->unsigned();
            $table->string('bank_location');
            $table->bigInteger('contactperson_userid')->unsigned();
            $table->string('edited_by')->nullable();
            $table->bigInteger('created_by')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('created_by')->references('user_id')->on('administrators');
            $table->foreign('contactperson_userid')->references('user_id')->on('applicationusers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
