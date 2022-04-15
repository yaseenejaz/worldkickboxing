<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentEntryFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_entry_fees', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tournament_id')->nullable();
            $table->unsignedInteger('currency_id')->default(1)->nullable();
            $table->unsignedInteger('pricing_id')->default(1)->nullable();
            $table->decimal('fee_per_competitor')->default(0.00)->nullable();
            $table->decimal('fee_per_category')->default(0.00)->nullable();
            $table->string('currency_short_title')->default('EUR')->nullable();
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
        Schema::dropIfExists('tournament_entry_fees');
    }
}
