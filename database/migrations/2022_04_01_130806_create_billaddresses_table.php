<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilladdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billaddresses', function (Blueprint $table) {
            $table->id();
            $table->string('billuser_id');
            $table->string('billuser_name');
            $table->string('billuser_phone');
            $table->string('billuser_address');
            $table->string('billuser_email');
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
        Schema::dropIfExists('billaddresses');
    }
}
