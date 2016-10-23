<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table)
        {
            $table->increments('coin_id');
            $table->string('mint_year');
            $table->integer('mintage_for_circulation');
            $table->integer('mintage_of_proofs');
            $table->integer('denomination_series_id');
            $table->string('mint_mark');
            $table->string('designer');
            $table->string('diameter');
            $table->string('metal_content');
            $table->string('weight');
            $table->string('edge');
            $table->string('notes');
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
        Schema::dropIfExists('coins');
    }
}
