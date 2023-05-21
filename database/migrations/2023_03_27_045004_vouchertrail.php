<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vouchertrail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchertrail', function (Blueprint $table) {
            $table->id();
            $table->string("pvid");
            $table->string("trailid");
            $table->string("class");
            $table->string("description");
            $table->integer("qty");
            $table->double("unitprice");
            $table->double("amount");
            $table->double("vatpercent");
            $table->double("vatamount");
            $table->double("grossamount");
            $table->double("whtpercent");
            $table->double("whtamount");
            $table->double("netamount");
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
        Schema::dropIfExists('vouchertrail');
    }
}
