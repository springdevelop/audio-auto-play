<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('desc')->nullable();
            $table->string('slug');
            $table->integer('positions_id');
            $table->bigInteger('users_id')
                ->references('id')->on('users')
                ->onDelete('set null');
            $table->bigInteger('groups_id')
                ->references('id')->on('groups')
                ->onDelete('set null');
            $table->string('status')->default(config('tables.devices.status.good'));
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
        Schema::dropIfExists('devices');
    }
}
