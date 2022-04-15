<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentRegisterSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_register_setting', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tournament_id')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->integer('open_for')->default(1)->nullable();
            $table->integer('school_created_by')->default(1)->nullable();
            $table->integer('allow_amendments')->default(1)->nullable();
            $table->bigInteger('max_categories_per_competitor')->nullable();
            $table->integer('auto_assign_competitor_numbers')->default(1)->nullable();
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
        Schema::dropIfExists('tournament_register_setting');
    }
}
