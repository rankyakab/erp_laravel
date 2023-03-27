<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pvtrail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvtrail', function (Blueprint $table) {
            $table->id();
            $table->string("pvid");
            $table->string("sentform");
            $table->string("title");
            $table->string("body", 1000);
            $table->string("attachment")->nullable();
            $table->string("status")->nullable();
            $table->string("remark")->nullable();
            $table->string("actor");
            $table->string("actor_type");
            $table->string("sendto");
            $table->string("copies")->nullable();
            $table->double("totalprice");
            $table->double("totalamount");
            $table->double("totalgross");
            $table->double("totalnet");
            $table->string("accountno");
            $table->string("accountname");
            $table->string("bank");
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
        Schema::dropIfExists('pvtrail');
    }
}
