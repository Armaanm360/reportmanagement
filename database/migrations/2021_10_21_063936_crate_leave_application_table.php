<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateLeaveApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('leave_application', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('leave_starting_from');
            $table->string('leave_starting_from_time')->nullable();
            $table->string('leave_ending_on');
            $table->string('leave_ending_on_time')->nullable();
            $table->text('reason')->nullable();
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
    Schema::dropIfExists('leave_application');
    }
}
