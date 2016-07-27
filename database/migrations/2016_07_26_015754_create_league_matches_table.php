<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeagueMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_matches', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('league_id')->nullable()->default(null);
            $table->integer('season_id')->nullable()->default(null);
            $table->integer('match_id')->nullable()->default(null);
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
        Schema::drop('league_matches');
    }
}
