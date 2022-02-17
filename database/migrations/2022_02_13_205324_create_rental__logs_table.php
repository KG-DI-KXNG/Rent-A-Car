<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental__logs', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignId("customer_id")->constrained("customers");
            $table->foreignId("vehicle_id")->constrained("vehicles");
            $table->string("status")->nullable();
            $table->date("returned_date")->nullable();
            $table->time("returned_time")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental__logs');
    }
}
