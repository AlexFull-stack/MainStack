<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->text('featured_image');
            $table->json('gallery_images');
            $table->text('description');
            // $table->string('checkin_from',5);
            // $table->string('checkin_to',5);
            // $table->string('checkout_from',5);
            // $table->string('checkout_to',5);
            // $table->text('cancellation_prepayment');
            // $table->text('refundable_damage_deposit');
            // $table->text('children_and_beds');
            // $table->text('age_restriction');
            // $table->text('payments_by_booking_dot_com');
            // $table->text('smoking');
            // $table->text('parties');
            // $table->text('quiet_hours');
            // $table->text('pets');
            $table->text('the_fine_print');
            $table->string('type');
            $table->string('api_id');
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
        Schema::dropIfExists('hotels');
    }
}
