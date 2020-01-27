<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('code',255);
          $table->string('age',255);
          $table->string('sex',255);
          $table->string('questTitle',255);
          $table->string('choice',255);
          $table->string('remote_addr',255);
          $table->string('user_agent',255);
          $table->unique(['remote_addr','user_agent'],'unique_answer');
          $table->datetime('created');
          $table->dateTime('modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
