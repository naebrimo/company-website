<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_variables', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('subject')->default('lorem ipsum');
            $table->string('copyright')->default(strtolower(config('app.name', 'company website')));
            $table->string('language')->default('en');
            $table->string('classification')->default('business');
            $table->string('description', 150)->default('lorem ipsum');
            $table->string('abstract')->default('lorem ipsum');
            $table->string('topic')->default('lorem ipsum');
            $table->string('summary')->default('lorem ipsum');
            $table->string('author_name')->default('john doe');
            $table->string('author_email')->default('johndoe@example.com');
            $table->string('designer_name')->default('jane doe');
            $table->string('designer_email')->default('janedoe@example.com');
            $table->string('designer_email')->default('janedoe@example.com');
            $table->string('reply_to')->default('johndoe@example.com');
            $table->string('owner')->default('company website');
            $table->string('owner')->default('company website');
            $table->string('category')->default('business');
            $table->string('category')->default('business');
            $table->string('coverage')->default('worldwide');
            $table->string('distribution')->default('global');
            $table->string('rating')->default('general');
            $table->unsignedSmallInteger('revisit-after')->default(7);
            $table->unsignedSmallInteger('expires')->default(0);
            $table->string('pragma')->default('no-cache');
            $table->string('cache-control')->default('no-cache');



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
        Schema::dropIfExists('global_variables');
    }
}
