<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('repair_id')->index('todo_list_repair_id_foreign');
            $table->string('name', 192);
            $table->double('estimated_cost', 8, 2);
            $table->enum('status', ['pending', 'in_progress', 'completed']);
            $table->unsignedBigInteger('employee_id')->index('todo_list_employee_id_foreign');
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
        Schema::dropIfExists('todo_list');
    }
}
