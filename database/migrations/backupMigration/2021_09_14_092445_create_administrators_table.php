<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('admin_name');
            $table->string('admin_nid');
            $table->string('admin_phone_no');
            $table->string('admin_email');
            $table->string('admin_designation')->nullable();
            $table->string('admin_status')->nullable();
            $table->string('edited_by')->nullable();
            $table->string('created_by')->nullable();
            $table->rememberToken();
            $table->timestamps(); 
            $table->foreign('user_id')
                ->references('user_id')->on('applicationusers')
                 ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrators');
    }
}
