<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->text('room_no')->nullable();
            $table->string('teacher_varsity_id')->nullable();
            $table->longText('work_title')->nullable();
            $table->string('edu_degree')->nullable();
            $table->longText('about_me')->nullable();
            $table->longText('publication')->nullable();
            $table->longText('interest')->nullable();
            $table->integer('status')->default(1);
            $table->integer('area_name_id')->nullable();
            $table->integer('category_name_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('teachers');
    }
}
