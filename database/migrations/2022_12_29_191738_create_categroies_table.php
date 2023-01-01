<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //'id' BIGINT UNSIGED NOT NULL AUTO_INCERMENT PRIMARY
            //$table->biginteger('id')->unsigned()->autoincrement()->primary();
            //$table->unsignedBiginteger('id')->autoincrement()->primary();
            //$table->bigincrements('id')->primary();
            $table->id();
            //'name' VARCHAR(255) NOT NULL
            $table->string('name');
            //'image_path' VARCHAR(500)  NULL
            $table->string('image_path',500)->nullable();
            //'parent_id' BIGINT UNSIGNED NULL
            $table->unsignedBigInteger('parent_id')->nullable();
            //'slug' VARCHAR(250) NOT NULL + UNIQUE INDEXES
            $table->string('slug')->unique();

            //'created_at' timestamp null
            //'updated_at' timestamp null 
            $table->timestamps();
            //add foreign key (parent_id)
            $table->foreign('parent_id')->references('id')->on('categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
