<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('martial_art_id')->nullable();
            $table->string('date')->nullable();
            $table->string('length')->nullable();
            $table->string('timezone')->nullable();
            $table->string('host')->nullable();
            $table->string('final_registration_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('show_national_flag')->default(0)->nullable();
            $table->integer('visibility')->default(0)->nullable();
            $table->integer('registration')->default(0)->nullable();
            $table->integer('draws')->default(0)->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('tournaments');
    }
}
