<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationusers', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('password');
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_parent')->default(0);
            $table->boolean('is_bank')->default(0);
            $table->boolean('is_child')->default(0);
            $table->boolean('is_active_status')->default(0);
            $table->string('edited_by')->nullable();
            $table->string('created_by');
            $table->string('authorized_by')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();  
           
            $table->string('admin_name')->nullable();
            $table->string('admin_nid')->nullable();
            $table->string('admin_phone_no')->unique()->nullable();
            $table->string('admin_email')->unique()->nullable();
            $table->string('admin_designation')->nullable();
         //   $table->string('admin_status')->default(0);
            // $table->string('edited_by')->nullable();
            // $table->string('created_by')->nullable();
            // $table->rememberToken();
            // $table->timestamps(); 

            $table->string('bank_name')->nullable();
            $table->string('client_id')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('bank_location')->nullable();
            $table->string('bank_website')->nullable();
            $table->string('bank_fax')->nullable();
            $table->string('bank_phone')->unique()->nullable();
            $table->string('bank_email')->unique()->nullable();
          //  $table->boolean('bank_status')->default(0);
            $table->bigInteger('bank_contactperson_userid')->nullable();
            // $table->string('edited_by')->nullable();
            // $table->bigInteger('created_by')->unsigned();
            // $table->rememberToken();
            // $table->timestamps();
            
            // $table->bigInteger('contactperson_userid')->unsigned();
           
            $table->string('bank_contactperson_name')->nullable();
            $table->string('bank_contactperson_phone')->unique()->nullable();
            $table->string('bank_contactperson_email')->unique()->nullable();
            $table->string('bank_contactperson_designation')->nullable();
            $table->string('bank_contactperson_department')->nullable();
            $table->string('bank_contactperson_nid')->nullable();
            $table->string('bank_contactperson_branch')->nullable();
            $table->string('bank_contactperson_location')->default(0);
           // $table->string('bank_contactperson_status')->default(0);
            
            // $table->bigInteger('created_by')->unsigned();;
            // $table->string('edited_by')->nullable();
            // $table->timestamps();


            //client_id
            
            $table->bigInteger('parent_id')->nullable();
            $table->string('child_contactperson_name')->nullable();
            $table->string('child_contactperson_phone')->unique()->nullable();
            $table->string('child_contactperson_email')->unique()->nullable();
            $table->string('child_contactperson_designation')->nullable();
            $table->string('child_contactperson_department')->nullable();
            $table->string('child_contactperson_nid')->nullable();
            $table->string('child_contactperson_branch')->nullable();
            $table->string('child_contactperson_location')->default(0);
           // $table->string('child_contactperson_status')->default(0);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicationusers');
    }
}
