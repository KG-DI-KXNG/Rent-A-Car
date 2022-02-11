<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->string("branch_code")->primary();
            $table->string("telephone");
            $table->string("street_num");
            $table->string("town");
            $table->string("parish_code");
            $table->string("address")->storedAs('street_num town parish_code');
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
        Schema::dropIfExists('branch');
    }
}
