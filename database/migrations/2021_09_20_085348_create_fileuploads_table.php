<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileuploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileuploads', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->bigInteger('doc_id')->nullable();
            $table->string('file_name')->nullable();
            $table->string('remote_ip_address')->nullable();
            $table->string('source_path')->nullable();
            $table->string('destination_path')->nullable();
            $table->string('destination_folder')->nullable();
            $table->string('destination_file_name')->nullable();
            $table->string('server_id')->nullable();   
            $table->string('mime_type')->nullable();
            $table->string('port_no')->nullable();
            $table->string('remarks')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('fileuploads');
    }
}
