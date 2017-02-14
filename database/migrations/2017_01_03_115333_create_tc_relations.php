<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTcRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_relations', function (Blueprint $table) {
            $table->increments('tc_id');

            $table->integer('tc_tender_id')->unsigned();
            $table->foreign('tc_tender_id')->references('tender_id')->on('tenders');

            $table->integer('tc_company_id')->unsigned();
            $table->foreign('tc_company_id')->references('c_id')->on('companies');

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
        Schema::dropIfExists('tc_relations');
    }
}
