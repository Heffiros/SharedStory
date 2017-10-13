<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->string('location');
                $table->integer('storyable_id');
                $table->string('storyable_type');
                $table->boolean('shared')->default(false);
                $table->timestamps();
        });

        Schema::table('story', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('story')) {
            Schema::dropIfExists('story');
        }
    }
}
