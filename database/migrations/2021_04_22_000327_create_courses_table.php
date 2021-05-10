<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('slug')->unique();
            $table->string('course_for')->nullable();
            $table->string('course_image')->nullable();
            $table->longText('overview')->nullable();
            $table->longText('course_format')->nullable();
            $table->longText('key_facts')->nullable();
            $table->string('module_label')->nullable();
            $table->longText('module_description')->nullable();
            $table->longText('learning_outcome')->nullable();
            $table->longText('opportunities')->nullable();
            $table->longText('additional_facilities')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
