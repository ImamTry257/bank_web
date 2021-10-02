<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_master', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false);
            $table->integer('branch_id')->nullable(false);
            $table->string('full_name')->nullable(false);
            $table->integer('cust_type_code')->nullable(false);
            $table->integer('gender')->nullable(false);
            $table->date('birth_date')->nullable(false);
            $table->longText('address')->nullable(false);
            $table->integer('city_id')->nullable(false);
            $table->integer('provinsi_id')->nullable(false);
            $table->integer('PIN')->nullable(false);
            $table->integer('mobile_number')->nullable(false);
            $table->string('email')->unique();
            $table->integer('is_activated')->nullable(false);
            $table->integer('created_by')->nullable(false);
            $table->integer('modified_by')->nullable(false);
            $table->dateTime('created_date')->nullable(false);
            $table->dateTime('modified_date')->nullable(false);
            $table->integer('is_deleted')->nullable(false);
            $table->timestamps();
            $table->foreign('user_id','fk_cust_user')->references('id')->on('users');
            $table->foreign('cust_type_code','fk_cust_type')->references('id')->on('mst_customer_type');
            $table->foreign('city_id','fk_cust_city')->references('id')->on('mst_city');
            $table->foreign('provinsi_id','fk_cust_prov')->references('id')->on('mst_provinsi');
            $table->foreign('branch_id','fk_cust_br')->references('id')->on('mst_branch');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_master');
    }
}
