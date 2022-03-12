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
            $table->string('name')->nullable();
            $table->integer('category_id')->default(1);
            $table->longText('description')->nullable();
            $table->longText('requirement')->nullable();
            $table->string('period')->nullable()->comment('Total duration of the course');
            $table->string('duration')->nullable()->comment('Daily classes duration');
            $table->float('price')->default(500);
            $table->tinyInteger('assessment')->default(0);
            $table->string('language')->nullable();
            $table->string('teacher')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
