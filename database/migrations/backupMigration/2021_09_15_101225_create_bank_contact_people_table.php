<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankContactPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_contact_people', function (Blueprint $table) {
            $table->bigInteger('contactperson_userid')->unsigned();
            $table->string('contactperson_name');
            $table->string('contactperson_phone')->nullable();
            $table->string('contactperson_email')->nullable();
            $table->string('contactperson_designation')->nullable();
            $table->string('contactperson_department')->nullable();
            $table->string('contactperson_branch')->nullable();
            $table->boolean('status')->default(0);
            $table->bigInteger('created_by')->unsigned();;
            $table->string('edited_by')->nullable();
            $table->timestamps();
            $table->foreign('created_by')->references('client_id')->on('banks');
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
        Schema::dropIfExists('bank_contact_people');
    }
}
