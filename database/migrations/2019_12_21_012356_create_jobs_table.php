<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string("job_title");
            $table->string("job_description")->nullable();
            $table->string("job_type")->nullable();
            $table->string("salary")->nullable();
            $table->string("gender")->nullable();
            $table->string("experience")->nullable();
            $table->string("email")->nullable();
            $table->string("contact_no")->nullable();
            $table->string("job_company")->nullable();
            $table->string("city")->nullable();
            $table->string("job_location")->nullable();
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
