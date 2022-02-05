<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_contact')->nullable();
            $table->string('user_email')->nullable();
            $table->string('package_name')->nullable();
            $table->string('package_type')->nullable();

            $table->double('package_price')->nullable();
            $table->string('status')->nullable();
            $table->string('Payment_type')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount')->nullable();
            $table->string('address')->nullable();


            
            $table->timestamp('fromdate')->nullable();
            $table->date('todate')->nullable();
            $table->longText('user_comment')->nullable();
            $table->longText('admin_comment')->nullable();


            
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
        Schema::dropIfExists('bookings');
    }
}
