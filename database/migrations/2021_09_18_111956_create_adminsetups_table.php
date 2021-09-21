<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminsetups', function (Blueprint $table) {
            $table->id();
            $table->double('tds_deduction_with_pan');
            $table->double('admin_charge_with_pan');
            $table->double('payout_limit');
            $table->double('admin_charge_without_pan');
            $table->double('tds_deduction_without_pan');
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
        Schema::dropIfExists('adminsetups');
    }
}
