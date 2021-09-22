<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelcomeLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcome_letters', function (Blueprint $table) {
            $table->id();
            $table->string('member_id');
            $table->string('member_name'); 
            $table->string('address');
            $table->string('city');
            $table->string('distict'); 
            $table->string('state'); 
            $table->string('sponsored_by'); 
            $table->string('doj'); 
            $table->string('membership'); 
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
        Schema::dropIfExists('welcome_letters');
    }
}
