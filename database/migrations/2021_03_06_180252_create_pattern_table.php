<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatternTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pattern', function (Blueprint $table) {
            $table->id();
            $table->string('pattern');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('period_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('period_id')->references('id')->on('period');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pattern');
    }
}
