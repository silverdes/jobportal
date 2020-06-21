<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('organisation_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('title');
            $table->string('skills_required');
            $table->$table->longText('description');
            $table->string('work_type')->default('on site'); //remote 
            $table->string('job_type')->default('full time');
            $table->string('status')->nullable()->default('open');
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
        Schema::dropIfExists('jobs');
    }
}
