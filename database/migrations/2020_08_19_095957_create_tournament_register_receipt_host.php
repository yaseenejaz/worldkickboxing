<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentRegisterReceiptHost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_register_receipt_host', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tournament_id')->nullable();
            $table->integer('enabled')->default(1)->nullable();
            $table->text('subject')->nullable();
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
        Schema::dropIfExists('tournament_register_receipt_host');
    }
}
