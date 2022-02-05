<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('place')->nullable();
            $table->string('image', 2048)->nullable();
            $table->string('availability')->nullable();

            $table->longText('feature')->nullable();
            $table->longText('detail')->nullable();

            $table->string('type')->nullable();
            $table->double('price')->nullable();
            $table->string('transport')->nullable();

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
        Schema::dropIfExists('packages');
    }
}
