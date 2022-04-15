<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentWeighIn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_weigh_in', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tournament_id')->nullable();
            $table->unsignedInteger('event_id')->nullable();
            $table->integer('weigh_in')->default(0)->nullable();
            $table->integer('attempts')->default(2)->nullable();
            $table->integer('tolerance')->default(0)->nullable();
            $table->integer('enforce_minimum_weights')->default(0)->nullable();
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
        Schema::dropIfExists('tournament_weigh_in');
    }
}
