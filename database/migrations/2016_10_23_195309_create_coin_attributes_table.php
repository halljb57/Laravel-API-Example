<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_attributes', function (Blueprint $table) {
            $table->increments('coin_attributes_id');
            $table->string('catalog_type');
            $table->integer('collection_id');
            $table->string('composition');
            $table->string('quality');
            $table->string('country');
            $table->string('current_value');
            $table->string('denomination');
            $table->string('denomination_series');
            $table->string('designer');
            $table->string('diameter');
            $table->string('edge');
            $table->string('grade');
            $table->string('grade_by');
            $table->string('metal_content');
            $table->string('mint');
            $table->string('mint_mark');
            $table->string('mint_year');
            $table->integer('mintage_for_circulation');
            $table->integer('mintage_of_proofs');
            $table->string('purchase_date');
            $table->string('purchase_from');
            $table->string('purchase_price');
            $table->integer('quantity');
            $table->string('serial_number');
            $table->string('sold_date');
            $table->string('sold_price');
            $table->string('sold_to');
            $table->string('thickness');
            $table->string('notes');
            $table->string('weight');
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
        Schema::dropIfExists('coin_attributes');
    }
}
