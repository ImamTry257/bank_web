<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_balance', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->nullable(false);
            $table->integer('trasanction_id')->nullable(false);
            $table->integer('balance_current')->nullable(false);
            $table->dateTime('created_date')->nullable(false);
            $table->dateTime('modified_date')->nullable(false);
            $table->integer('is_deleted')->nullable(false);
            $table->timestamps();
            $table->foreign('account_id','fk_bal_acc')->references('id')->on('customer_account');
            $table->foreign('trasanction_id','fk_bal_tra')->references('id')->on('customer_transaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_balance');
    }
}
