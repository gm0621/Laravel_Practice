<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();            
            $table->integer('question_id')->unsigned();
            $table->text('content');
            $table->timestamps();

            //Foreign Key Column
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->dropForeign('answers_question_id_foreign');
        });

        Schema::dropIfExists('answers');
    }
}
