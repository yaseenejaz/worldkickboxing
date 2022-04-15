<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentRegisterIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_register_individual', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tournament_id')->nullable();
            $table->integer('strict_divisions')->default(0)->nullable();
            $table->integer('email')->default(1)->nullable();
            $table->integer('phone')->default(1)->nullable();
            $table->integer('school_contact_phone')->default(0)->nullable();
            $table->integer('win_loss_record')->default(0)->nullable();
            $table->integer('competitor_photos')->default(0)->nullable();
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
        Schema::dropIfExists('tournament_register_individual');
    }
}
