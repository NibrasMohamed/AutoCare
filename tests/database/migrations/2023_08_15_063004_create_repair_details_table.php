<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('repair_id')->nullable();
            $table->unsignedBigInteger('repair_type_id')->index('repair_details_repair_type_id_foreign');
            $table->string('name', 192);
            $table->double('estimated_cost', 8, 2);
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
        Schema::dropIfExists('repair_details');
    }
}
