<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatementRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatement_records', function (Blueprint $table) {
            
            $table->integer('notificationid');
            $table->integer('pets_id');
            $table->string('Title');
            $table->string('discription');
            $table->string('medicine');
            $table->integer('quantity');
            $table->string('price');
            $table->string('total');
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
        Schema::dropIfExists('treatement_records');
    }
}
