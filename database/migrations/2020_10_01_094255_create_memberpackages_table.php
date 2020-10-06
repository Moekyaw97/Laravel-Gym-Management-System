<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberpackages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('trainer_id');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('time')->useCurrent();

            $table->timestamps();

             $table->foreign('member_id')
                  ->references('id')
                  ->on('members')
                  ->onDelete('cascade');

             $table->foreign('package_id')
                  ->references('id')
                  ->on('packages')
                  ->onDelete('cascade');

             $table->foreign('trainer_id')
                  ->references('id')
                  ->on('trainers')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberpackages');
    }
}