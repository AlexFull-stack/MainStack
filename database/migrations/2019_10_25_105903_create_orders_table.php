<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hotel_id')->unsigned()->index();           
            $table->string('ref_id');
            $table->integer('booking_number');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->string('reservation_info');
            $table->bigInteger('blog_user_id');
            $table->string('bookedby_name');
            $table->string('bookedby_email');
            $table->text('url_to booking_details');
            $table->timestamps();
        });

        Schema::table('orders', function ($table) {
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
        Schema::dropIfExists('orders');
    }
}
