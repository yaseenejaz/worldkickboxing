<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('tournament_id')->nullable();
            $table->unsignedInteger('martial_art_id')->nullable();
            $table->unsignedInteger('descipline_id')->nullable();
            $table->integer('position')->nullable();
            $table->integer('format')->nullable();
            $table->string('identifier')->nullable();
            $table->string('cover_photo')->nullable();
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
        Schema::dropIfExists('events');
    }
}
