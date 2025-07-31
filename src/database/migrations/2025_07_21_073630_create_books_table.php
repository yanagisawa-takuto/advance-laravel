<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('nationality');
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
        Schema::dropIfExists('books');
    }
}