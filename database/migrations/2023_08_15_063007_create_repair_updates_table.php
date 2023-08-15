<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_updates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('repair_id')->index('repair_updates_repair_id_foreign');
            $table->string('name', 192);
            $table->double('estimated_cost', 8, 2);
            $table->unsignedBigInteger('employee_id')->index('repair_updates_employee_id_foreign');
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
        Schema::dropIfExists('repair_updates');
    }
}
