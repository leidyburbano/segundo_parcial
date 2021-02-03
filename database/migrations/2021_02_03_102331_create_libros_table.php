<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();   
            $table->string('ISBN',10);
            $table->string('titulo',200); 
            $table->float('precio');
            $table->integer('stock');  

            $table->unsignedBigInteger('editorial_fk');              
            $table->foreign('editorial_fk')->references('id')->on('editorial');

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
        Schema::dropIfExists('libros');
    }
}
