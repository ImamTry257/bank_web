<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_account', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->nullable(false);
            $table->string('account_number')->nullable(false);
            $table->string('account_type')->nullable(false);
            $table->integer('bank_id')->nullable(false);
            $table->bigInteger('inital_deposite')->nullable(false);
            $table->integer('is_activated')->nullable(false);
            $table->integer('created_by')->nullable(false);
            $table->integer('modified_by')->nullable(false);
            $table->dateTime('created_date')->nullable(false);
            $table->dateTime('modified_date')->nullable(false);
            $table->integer('is_deleted')->nullable(false);
            $table->timestamps();
            $table->foreign('customer_id','fk_acc_cust')->references('id')->on('customer_master');
            $table->foreign('bank_id','fk_acc_bnk')->references('id')->on('mst_bank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_account');
    }
}
