<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanks', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->string('url');
			$table->string('hobbytron_aff_link');
			$table->string('amzn_aff_link');
			$table->string('description');
			$table->string('scale');
			$table->string('size');
			$table->string('nationality');
			$table->float('rating');
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
        Schema::dropIfExists('tanks');
    }
}
