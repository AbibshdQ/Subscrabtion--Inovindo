<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_sub_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_id');  
            $table->year('year');
            $table->integer('month');
            $table->decimal('amount_paid');
            $table->enum('status', ['paid', 'Installment']);
            $table->timestamps();
        
             
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
        });
        
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_sub_statuses');
    }
};
