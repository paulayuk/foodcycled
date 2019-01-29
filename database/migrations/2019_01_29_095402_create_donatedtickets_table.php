<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatedticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donatedtickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('donated_by');
            $table->string('state');
            $table->string('city');
            $table->string('zipcode');
            $table->string('address');
            $table->integer('no_of_tickets');
            $table->string('tracking_id');
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('donatedtickets');
    }
}
