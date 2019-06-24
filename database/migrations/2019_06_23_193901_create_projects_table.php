<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->text("details");

            $table->unsignedInteger("category_id")->default(1);
            $table->foreign("category_id")->references("id")->on("project_categories")->onDelete("cascade");

            $table->unsignedInteger("location_id")->nullable();
            $table->foreign("location_id")->references("id")->on("project_locations")->onDelete("set null");

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
        Schema::dropIfExists('projects');
    }
}
