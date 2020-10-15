<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('teacher_id');
            $table->longText('topicsFor_booking')->nullable();
            $table->dateTime('booking_dateTime')->nullable();
            $table->integer('status_id')->default(1);  // 1 = Pending ,  2 = Approved, 3 = Rejected
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
        Schema::dropIfExists('bookings');
    }
}
