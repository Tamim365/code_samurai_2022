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
        Schema::create('components', function (Blueprint $table) {
            $table->string('component_id')->unique();
            $table->foreign('project_id')
                ->references('project_id')->on('projects')
                ->onDelete('set null');
            $table->string('executing_agency');
            $table->string('component_type');
            $table->string('depends_on');
            $table->floatval('budget_ratio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('components');
    }
};
