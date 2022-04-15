<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tournament_id')->nullable();
            $table->string('stripe_account')->nullable();
            $table->string('paypal_account')->nullable();
            $table->text('terms_and_policy')->nullable();
            $table->text('contact_information')->nullable();
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
        Schema::dropIfExists('tournament_payments');
    }
}
