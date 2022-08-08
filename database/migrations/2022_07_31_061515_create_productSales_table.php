<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productSales', function (Blueprint $table) {
            $table->id();
            $table->string('selectCustomer');
            $table->string('selectProduct');
            $table->decimal('productPrice',10,2);
            $table->string('entryQuantity');
            $table->decimal('totalAmount',10,2);
            $table->date('entryDate');
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
        Schema::dropIfExists('product_sales');
    }
};
