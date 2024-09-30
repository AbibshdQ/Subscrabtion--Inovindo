<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('user_id');  
            $table->decimal('pay', 10, 2);
            $table->enum('payment_type', ['cash', 'transfer']);
            $table->enum('payment_status', ['Paid', 'Installment', 'Failed']);
            $table->timestamp('payment_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
