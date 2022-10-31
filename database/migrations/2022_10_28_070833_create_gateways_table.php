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
        Schema::create('gateways', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->nullable();
            $table->string('name');
            $table->string('alias');
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->text('gateway_parameters')->nullable();
            $table->decimal('min_amount')->default(0.0);
            $table->decimal('max_amount')->default(0.0);
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
        Schema::dropIfExists('gateways');
    }
};
