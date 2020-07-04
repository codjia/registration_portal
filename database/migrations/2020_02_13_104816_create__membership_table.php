<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->default("N/A")->nullable();
            $table->string('name')->default("N/A")->nullable();
            $table->string('date_of_birth')->default("N/A")->nullable();
            $table->string('gender')->default("N/A")->nullable();
            $table->string('contact')->default("N/A")->nullable();
            $table->string('occupation')->default("N/A")->nullable();
            $table->string('hometown')->default("N/A")->nullable();
            $table->string('address')->default("N/A")->nullable();
            $table->string('emergency_contact')->default("N/A")->nullable();
            $table->string('relationship')->default("N/A")->nullable();
            $table->string('skill')->default("N/A")->nullable();
            $table->string('branch')->default("N/A")->nullable();
            $table->string('membership')->default("N/A")->nullable();
            $table->string('ever_attended')->default("N/A")->nullable();
            $table->string('why_member')->default("N/A")->nullable();
            $table->string('how_ymca')->default("N/A")->nullable();
            $table->string('passport_picture')->nullable();
            $table->string('agreement')->nullable();
            $table->timestamps();
            // $table->softDeletes();
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_membership');
    }
}
