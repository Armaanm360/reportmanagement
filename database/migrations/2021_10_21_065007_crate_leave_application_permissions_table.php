<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateLeaveApplicationPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('leave_application_permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('permission_holder_id');
            $table->bigInteger('leave_application_id')->unsigned();
            $table->foreign('leave_application_id')->references('id')->on('leave_application')->onDelete('cascade');           
            $table->tinyInteger('status')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
      Schema::dropIfExists('leave_application_permissions');
    }
}
