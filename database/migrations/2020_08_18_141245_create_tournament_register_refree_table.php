<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentRegisterRefreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_register_refree', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tournament_id')->nullable();
            $table->integer('enable_refrees')->default(0)->nullable();
            $table->integer('refree_online_registration')->default(0)->nullable();
            $table->integer('refree_photos')->default(0)->nullable();
            $table->integer('refree_rank')->default(0)->nullable();
            $table->string('refree_classification')->nullable();
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
        Schema::dropIfExists('tournament_register_refree');
    }
}
