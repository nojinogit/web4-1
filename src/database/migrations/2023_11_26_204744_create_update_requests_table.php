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
        Schema::create('update_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('shop_id')->constrained('shops')->cascadeOnDelete();
            $table->string('name');
            $table->string('telephone_number');
            $table->char('postcode',8);
            $table->string('address');
            $table->time('start');
            $table->time('end');
            $table->integer('max_group');
            $table->smallInteger('minimum_budget_for_lunch');
            $table->smallInteger('maximum_budget_for_lunch');
            $table->smallInteger('minimum_budget_for_dinner');
            $table->smallInteger('maximum_budget_for_dinner');
            $table->integer('approval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_requests');
    }
};
