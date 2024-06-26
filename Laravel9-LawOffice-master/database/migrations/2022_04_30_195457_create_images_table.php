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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('title', 50);
            $table->string('image', 100);
            $table->timestamps();
        });

        Schema::table('images', function (Blueprint $table) {
            $table->renameColumn('product_id', 'services_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
        
        Schema::table('images', function (Blueprint $table) {
            $table->renameColumn('services_id','product_id');
      });
    }
};
