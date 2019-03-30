<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrashDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //In short: lat DECIMAL(10, 8) lng DECIMAL(11, 8)
        Schema::create('trash_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('lat', 10, 8);
            $table->decimal('long', 11, 8);
            $table->string('file_location');
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
        Schema::dropIfExists('trash_data');
    }
}
