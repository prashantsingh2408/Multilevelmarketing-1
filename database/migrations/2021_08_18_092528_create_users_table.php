<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('salutation');
<<<<<<< HEAD
=======
            $table->string('pic');
>>>>>>> cba20ef2a3d5b31894f69990f21517d0ad68a9c3
            $table->string('name');
            $table->string('pic')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('track_id')->nullable();
            $table->string('member_id')->nullable();
            $table->string('sponsor_id')->nullable();
            $table->string('sponsor_name')->nullable();
            $table->string('product')->nullable();
            $table->string('joining_date_from')->nullable();
            $table->string('joining_date_to')->nullable();
            $table->string('activation_date_to')->nullable();
            $table->string('activation_date_from')->nullable();
            $table->string('top_up')->nullable();
            $table->string('referal_link')->nullable();
            $table->string('status')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('pincode')->nullable();
            $table->string('adhar_no')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('s_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('gardian')->nullable();
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
        Schema::dropIfExists('users');
    }
}