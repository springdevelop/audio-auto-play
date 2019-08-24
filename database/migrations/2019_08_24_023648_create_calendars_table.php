<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('desc')->nullable();
            $table->string('audio');
            $table->timestamp('time_from')->nullable()->default(null);
            $table->timestamp('time_to')->nullable()->default(null);
            $table->bigInteger('positions_id')
                ->references('id')->on('positions')
                ->onDelete('set null');
            $table->bigInteger('users_id')
                ->references('id')->on('users')
                ->onDelete('set null');
            $table->string('status')->default(config('tables.calendars.status.pending'));
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
        Schema::dropIfExists('calendars');
    }
}
