<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_inventory', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity_on_hand');
            $table->double('price', 8, 2);
            $table->bigInteger('supplier_id');
            $table->bigInteger('spare_part_id');
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
        Schema::dropIfExists('supplier_inventory');
    }
}
