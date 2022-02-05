<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();


            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_contact')->nullable();
            $table->string('user_email');
            $table->string('package_name')->nullable();
            $table->double('package_price')->nullable();

            $table->string('payment_type')->nullable();
            $table->string('transection_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->double('quantity')->nullable();
            $table->double('total_cost')->nullable();



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
        Schema::dropIfExists('sales');
    }
}
