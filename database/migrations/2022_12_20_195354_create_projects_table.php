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
        Schema::create('projects', function (Blueprint $table) {
            $table->string('project_id')->unique();
            $table->string('name');
            $table->string('location');
            $table->float('latitude');
            $table->float('longitude');
            // $table->unsignedBigInteger('exec');
            $table->float('cost');
            $table->integer('timespan');
            $table->string('goal');
            $table->date('start_date');
            $table->float('completion');
            $table->float('actual_cost');
            $table->string('exec')
                ->references('code')->on('agencies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
