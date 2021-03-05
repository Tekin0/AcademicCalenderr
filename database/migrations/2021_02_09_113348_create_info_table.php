<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('period_id');
            $table->unsignedBigInteger('date_id')->nullable();
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('period_id')->references('id')->on('period');
            $table->foreign('date_id')->references('id')->on('calendar');
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
        Schema::dropIfExists('info');
    }
}
