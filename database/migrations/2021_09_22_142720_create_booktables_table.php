<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooktablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booktables', function (Blueprint $table) {
            $table->id();
            $table->string('titre1');
            $table->string('titre2');
            $table->string('titre3');
            $table->string('btn1');
            $table->string('btn2');
            $table->string('btn3');
            $table->string('btn4');
            $table->string('btn5');
            $table->string('btn6');
            $table->string('btn7');
            $table->string('btn8');
            $table->string('btn9');
            $table->string('btn10');
            $table->string('btn11');
            $table->string('btn12');
            $table->string('btn13');
            $table->string('btn14');
            $table->string('btn15');
            $table->string('btn16');
            $table->string('btn17');
            $table->string('btn18');
            $table->string('btn19');
            $table->string('btn20');
            $table->string('btn21');
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
        Schema::dropIfExists('booktables');
    }
}
