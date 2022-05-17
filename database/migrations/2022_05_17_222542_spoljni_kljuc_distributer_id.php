<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpoljniKljucDistributerId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brends', function (Blueprint $table) {
            $table->after('osnivac', function ($table) {
                $table->foreignId('distributer_id')->constrained('distributers');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brends', function (Blueprint $table) {
            $table->dropColumn('distributer_id');
        });
    }
}
