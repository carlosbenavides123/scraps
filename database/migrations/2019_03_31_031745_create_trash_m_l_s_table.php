<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrashMLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trash_ml_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('lat', 15, 10);
            $table->decimal('lng', 15, 10);
            $table->string('size');
            $table->string('url');
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
        Schema::dropIfExists('trash_ml_table');
    }
}
