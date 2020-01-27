<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quests', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('code')->unique();
          $table->string('questTitle',255);
          $table->integer('choicesNum')->default(2);
          $table->string('choicesList',255);
          $table->string('category',100);
          $table->string('userId',100);
          $table->integer('numberOfResponses')->default(0);
          $table->dateTime('created');
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
        Schema::dropIfExists('quests');
    }
}
