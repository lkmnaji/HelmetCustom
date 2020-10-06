<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('email_customer');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('kode_pos');
            $table->unsignedInteger('order_id');
            $table->string('total_harga');
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('province')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_pos')->references('id')->on('kodepos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
