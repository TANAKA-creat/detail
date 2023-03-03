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
        Schema::create('attendance_statuses', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('employee')->nullable();
            $table->integer('overtime_on_weekdays_total')->nullable();
            $table->integer('overtime_on_weekdays_15')->nullable();
            $table->integer('overtime_on_weekdays_times')->nullable();
            $table->integer('overtime_on_weekdays_auto')->nullable();

            $table->integer('weekend_overtime_total')->nullable();
            $table->integer('weekend_overtime_15')->nullable();
            $table->integer('weekend_overtime_times')->nullable();
            $table->integer('weekend_overtime_auto')->nullable();
            
            $table->integer('overtime_on_public_holidays_total')->nullable();
            $table->integer('overtime_on_public_holidays_15')->nullable();
            $table->integer('overtime_on_public_holidays_times')->nullable();
            $table->integer('overtime_on_public_holidays_auto')->nullable();

            $table->integer('business_trip')->nullable();
            $table->integer('other_holidays')->nullable();
            $table->integer('other_attendance')->nullable();
            $table->integer('lunch')->nullable();
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
        Schema::dropIfExists('attendance_statuses');
    }
};
