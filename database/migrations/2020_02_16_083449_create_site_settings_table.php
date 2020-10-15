<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_phnNumber')->nullable();
            $table->text('site_mail')->nullable();
            $table->string('site_address')->nullable();
            $table->longText('site_shortDescription')->nullable();
            $table->string('site_fbLink')->nullable();
            $table->string('site_ytLink')->nullable();
            $table->string('site_logo')->nullable();
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
        Schema::dropIfExists('site_settings');
    }
}
