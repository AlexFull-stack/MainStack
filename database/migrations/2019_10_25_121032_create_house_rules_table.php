<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rule_id');
            $table->bigInteger('hotel_id')->unsigned()->index();
            $table->string('value');
            $table->timestamps();
        });

        Schema::table('house_rules', function ($table) {
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_rules');
    }
}
