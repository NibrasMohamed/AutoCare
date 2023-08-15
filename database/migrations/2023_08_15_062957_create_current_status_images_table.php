<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentStatusImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_status_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('repair_id')->index('current_status_images_repair_id_foreign');
            $table->string('path', 192);
            $table->unsignedBigInteger('employee_id')->index('current_status_images_employee_id_foreign');
            $table->timestamp('uploaded_at')->useCurrent()->useCurrentOnUpdate();
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
        Schema::dropIfExists('current_status_images');
    }
}
