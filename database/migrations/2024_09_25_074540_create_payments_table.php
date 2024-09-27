<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();  
            $table->decimal('pay', 10, 2);
            $table->enum('payment_type', ['cash', 'transfer']);
            $table->enum('payment_status', ['Paid', 'Installment', 'Failed']);
            $table->timestamp('payment_date');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
