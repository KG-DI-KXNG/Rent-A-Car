<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_relatives', function (Blueprint $table) {
            $table->id();
            $table->foreignId("customer_id")->constrained("customers");
            $table->string('relative_name')->nullable();
            $table->string('relative_address')->nullable();
            $table->string('relative_tel',15)->nullable();
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
        Schema::dropIfExists('customer_relatives');
    }
}
