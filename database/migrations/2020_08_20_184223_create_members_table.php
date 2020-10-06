<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
           
            $table->text('weight');
            $table->string('phoneno');
            $table->text('address');
            $table->unsignedBigInteger('membertype_id');
            
            $table->timestamps();


             $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

             $table->foreign('membertype_id')
                  ->references('id')
                  ->on('membertypes')
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
        Schema::dropIfExists('members');
    }
}