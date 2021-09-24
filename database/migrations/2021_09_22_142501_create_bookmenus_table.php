<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmenus', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('btn1');
            $table->string('btn2');
            $table->text('btn3');
            $table->string('btn4');
            $table->string('img2');
            $table->string('btn5');
            $table->string('btn6');
            $table->text('btn7');
            $table->string('btn8');
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
        Schema::dropIfExists('bookmenus');
    }
}
