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
        Schema::create('travel_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('destination');
            $table->date('from');
            $table->date('until');
            $table->integer('total')->nullable();
            $table->integer('from_ticket_fee')->nullable();
            $table->integer('to_ticket_fee')->nullable();
            $table->integer('allowance')->nullable();
            $table->integer('cost_per_day');
            $table->integer('transportation_cost')->nullable();
            $table->integer('miscellaneous_expense')->nullable();
            $table->integer('other')->nullable();
            $table->string('memo')->nullable();
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
        Schema::dropIfExists('travel_expenses');
    }
};
