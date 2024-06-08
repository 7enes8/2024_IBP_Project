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
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',200);
            $table->string('email',200)->nullable();
            $table->string('phone',200)->nullable();
            $table->string('subject',150)->nullable();
            $table->string('message',150)->nullable();
            $table->string('note',200)->nullable();
            $table->string('ip',200)->nullable();
            $table->string('status',5)->nullable()->default('New');
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
        Schema::dropIfExists('messages');
    }
};
