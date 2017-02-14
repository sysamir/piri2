<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->increments('tender_id');
            $table->string('tender_name');
            $table->string('tender_slug');
            $table->text('tender_desc');
            $table->string('tender_image');
            $table->integer('tender_status')->default(0);
            $table->string('tender_address');
            $table->string('tender_mail');
            $table->string('tender_phone');
            $table->string('tender_cost_value');
            $table->string('tender_cost_currency');
            $table->boolean('tender_private');

            $table->integer('tender_category_id')->unsigned();
            $table->foreign('tender_category_id')->references('cat_id')->on('categories');

            $table->integer('tender_created_by_id');
            $table->dateTime('tender_deadline');
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
        Schema::dropIfExists('tenders');
    }
}
