<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_medicines', function (Blueprint $table) {
            $table->integer('reportId');
            $table->increments('id');

            $table->string('type');
            $table->string('quantityOfIssue');
            
            $table->timestamps();
        });
    }
//we make another tabele for pet medicine treatments to add remove medicines
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_medicines');
    }
}
