<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->id();
            $table->date('release_date');
            $table->date('due_date')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('period_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('period_id')->references('id')->on('period');

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
        Schema::dropIfExists('calendar');
    }
}
