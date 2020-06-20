<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('user_id');
            $table->year('start_date');
            $table->string('skill_level')->nullable()->default('beginner');
            $table->longText('past_work_history')->nullable();
            $table->longText('other_information')->nullable();
            $table->dateTime('admin_interview');
            $table->integer('admin_user_id')->nullable();
            $table->string('score')->nullable();
            $table->string('interview_status')->default('not requested');
            $table->double('interview_amount_paid', 8, 2)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('skills');
    }
}
