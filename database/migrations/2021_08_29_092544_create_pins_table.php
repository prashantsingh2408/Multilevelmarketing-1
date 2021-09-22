<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pins', function (Blueprint $table) {
            // $table->id()->nullable();
            $table->id();
            $table->string('member_id')->nullable();
            $table->string('pin')->nullable();
            $table->string('member_name')->nullable();
            $table->string('pin_no')->nullable();
            $table->string('used_by')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('product')->nullable();
            $table->string('transfer_id')->nullable();
            $table->string('transfer_date')->nullable();
            $table->string('transfer_name')->nullable();
            $table->string('report_type')->nullable();
            $table->string('approvel_status')->nullable();
            $table->dateTime('from')->nullable();
            $table->dateTime('to')->nullable();
            $table->string('total_record')->nullable();
            $table->string('mobile_no')->nullable();
            $table->date('date')->nullable();
            $table->string('reciept')->nullable();
            $table->string('amount')->nullable();
            $table->softDeletes();  
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
        Schema::dropIfExists('pins');
    }
}