<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimpleStoryPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simple_story_page', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('simple_story_id')->unsigned();
            $table->longText('content');
            $table->integer('ordre');
            $table->timestamps();
        });


        Schema::table('simple_story_page', function (Blueprint $table) {
            $table->foreign('simple_story_id')->references('id')->on('simple_story');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('simple_story_page')) {
            Schema::dropIfExists('simple_story_page');
        }
    }
}
