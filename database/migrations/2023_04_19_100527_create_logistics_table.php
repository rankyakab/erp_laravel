<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logistics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('purpose', 255);
            $table->Double('amount');
            $table->foreignId('requested_by');
            $table->foreignId('sent_to');
            $table->Timestamp('start_date')->default(now());
            $table->Timestamp('end_date')->nullable(true);
            $table->string('status', 50);

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
        Schema::dropIfExists('logistics');
    }
}
