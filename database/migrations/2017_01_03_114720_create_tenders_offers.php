<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTendersOffers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders_offers', function (Blueprint $table) {
            $table->increments('offer_id');

            $table->integer('offer_tender_id')->unsigned();
            $table->foreign('offer_tender_id')->references('tender_id')->on('tenders');

            $table->integer('offer_by_id')->unsigned();
            $table->foreign('offer_by_id')->references('id')->on('users');

            $table->text('offer_desc');
            $table->string('offer_cost');
            $table->date('offer_delivery_datatime');
            $table->boolean('offer_winner');
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
        Schema::dropIfExists('tenders_offers');
    }
}
