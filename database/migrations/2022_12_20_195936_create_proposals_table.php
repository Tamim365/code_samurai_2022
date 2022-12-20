<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->string('project_id')->unique();
            $table->string('name');
            $table->string('location');
            $table->floatval('latitude');
            $table->floatval('longitude');
            $table->foreign('exec')
                ->references('code')->on('agencies')
                ->onDelete('set null');
            $table->floatval('cost');
            $table->integer('timespan');
            $table->string('goal');
            $table->date('proposal_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
};
