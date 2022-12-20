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
            $table->float('latitude');
            $table->float('longitude');
            // $table->index('exec');
            $table->string('exec')->references('code')->on('agencies')->onUpdate('cascade')->onDelete('cascade');
            $table->float('cost');
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
