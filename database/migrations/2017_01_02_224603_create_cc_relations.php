<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cc_relations', function (Blueprint $table) {
            $table->increments('cc_id');

            $table->integer('cc_cat_id')->unsigned();
            $table->foreign('cc_cat_id')->references('cat_id')->on('categories');

            $table->integer('cc_company_id')->unsigned();
            $table->foreign('cc_company_id')->references('c_id')->on('companies');
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
        Schema::dropIfExists('cc_relations');
    }
}
