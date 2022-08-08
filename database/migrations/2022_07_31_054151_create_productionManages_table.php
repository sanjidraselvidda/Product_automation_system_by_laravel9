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
        Schema::create('productionManages', function (Blueprint $table) {
            $table->id();
            $table->timestamp('entryDate');
            $table->string('productionNo');
            $table->date('expiryDate');
            $table->string('selectProductName');
            $table->string('uniteType');
            $table->decimal('productionQuantity',10,2);
            $table->string('selectedMaterials');
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
        Schema::dropIfExists('production_manages');
    }
};
