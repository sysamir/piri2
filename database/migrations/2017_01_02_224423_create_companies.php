<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('c_id');
            $table->string('c_name');
            $table->string('c_logo_image');
            $table->text('c_desc');
            $table->string('c_voen');
            $table->string('c_number');
            $table->string('c_official_mail');

            $table->integer('c_user_id')->unsigned();
            $table->foreign('c_user_id')->references('id')->on('users');

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
        Schema::dropIfExists('companies');
    }
}
