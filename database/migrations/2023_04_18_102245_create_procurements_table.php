<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurements', function (Blueprint $table) {


            $table->id();
            $table->string('item', 255);
            $table->Integer('quantity');
            $table->integer('amount');
            $table->integer('unit_price');
            $table->integer('total_price');
            $table->foreignId('requested_by');
            $table->foreignId('sent_to');
            $table->Timestamp('date')->default(now());
            $table->string('status', 50);
            $table->string('attachment', 255)->nullable();
            $table->string('attachment_type', 50);
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
        Schema::dropIfExists('procurements');
    }
}
