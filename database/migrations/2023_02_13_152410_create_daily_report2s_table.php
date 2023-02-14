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
        Schema::create('daily_report2s', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('what_day')->nullable();
            $table->string('employee_1')->nullable();
            $table->string('employee_2')->nullable();
            $table->string('employee_3')->nullable();
            $table->string('employee_4')->nullable();
            $table->string('employee_5')->nullable();
            $table->string('employee_6')->nullable();
            $table->string('employee_7')->nullable();
            $table->string('employee_8')->nullable();
            $table->string('employee_9')->nullable();
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
        Schema::dropIfExists('daily_report2s');
    }
};
