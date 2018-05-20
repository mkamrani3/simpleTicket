<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('assignee_id')->nullable();
            $table->string('title');
            $table->mediumText('description');
            $table->string('status')->default('OPEN');
            $table->timestamps();

            $table->foreign('owner_id')
                ->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('assignee_id')
                ->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('ticket_threads', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('ticket_id');
            $table->unsignedInteger('user_id');
            $table->mediumText('description');
            $table->tinyInteger('type')->default(0); // 0 - Reply, 1 - Action
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
        Schema::dropIfExists('ticket_threads');
        Schema::dropIfExists('tickets');
    }
}
