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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('interest_percent');
            $table->tinyInteger('plan_type')->comment('1 => Income, 2 => Growth, 3 => Invest');
            $table->tinyInteger('interest_type')->comment('1 => Fixed, 2 => Total');
            $table->integer('withdraw_days')->default(0);
            $table->boolean('can_add_to_invest')->default(false);
            $table->boolean('is_active')->default(true);
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('plans');
    }
};
