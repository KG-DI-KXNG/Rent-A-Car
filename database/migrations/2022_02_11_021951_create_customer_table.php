<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->string("customer_number")->primary();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("middleinitial");
            $table->string("name")->storedAs('firstname, lastname, middleinitial');
            $table->string("street_num");
            $table->string("town");
            $table->string("parish_code");
            $table->string("address")->storedAs('street_num town parish_code');
            $table->string("parish_code");
            $table->foreign("parish_code")->references("parish_code")->on("parish");
            $table->string("branch_name");
            $table->string("manager_id")->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
