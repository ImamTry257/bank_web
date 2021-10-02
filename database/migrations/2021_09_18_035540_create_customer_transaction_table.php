<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_transaction', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('account_sender')->nullable(false);
            $table->bigInteger('account_receiver')->nullable(false);
            $table->bigInteger('amount')->nullable(false);
            $table->longText('descriptions');
            $table->bigInteger('reference_no')->nullable(false);
            $table->dateTime('created_date')->nullable(false);
            $table->dateTime('modified_date')->nullable(false);
            $table->integer('is_deleted')->nullable(false);
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
        Schema::dropIfExists('customer_transaction');
    }
}
