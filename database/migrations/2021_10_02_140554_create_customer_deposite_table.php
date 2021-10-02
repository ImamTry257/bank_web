<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDepositeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_deposite', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->nullable(false);
            $table->integer('amount_deposite')->nullable(false);
            $table->longText('descriptions')->nullable(false);
            $table->dateTime('deposite_date')->nullable(false);
            $table->integer('created_by')->nullable(false);
            $table->integer('modified_by')->nullable(false);
            $table->dateTime('created_date')->nullable(false);
            $table->dateTime('modified_date')->nullable(false);
            $table->integer('is_deleted')->nullable(false);
            $table->timestamps();
            $table->foreign('account_id','fk_bal_acc')->references('id')->on('customer_account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_deposite');
    }
}
