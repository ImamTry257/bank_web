<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstProvinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_provinsi', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi_name')->nullable(false);
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
        Schema::dropIfExists('mst_provinsi');
    }
}
