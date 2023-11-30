<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('telephone_number');
            $table->char('postcode',8);
            $table->string('address')->index();
            $table->time('start');
            $table->time('end');
            $table->integer('max_group');
            $table->smallInteger('minimum_budget_for_lunch');
            $table->smallInteger('maximum_budget_for_lunch');
            $table->smallInteger('minimum_budget_for_dinner');
            $table->smallInteger('maximum_budget_for_dinner');
            $table->string('title')->nullable();
            $table->string('overview')->nullable();
            $table->string('path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
