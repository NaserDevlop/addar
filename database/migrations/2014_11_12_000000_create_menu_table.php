<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('cla')->nullable();
            $table->string('type')->nullable();
            $table->string('class')->nullable();
            $table->string('note')->nullable();
             $table->timestamps();
        });


        Schema::create('juicess', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('cla')->nullable();
             $table->timestamps();
        });

        Schema::create('appetizers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('cla')->nullable();
             $table->timestamps();
        });

        Schema::create('falafels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('cla')->nullable();
             $table->timestamps();
        });



        Schema::create('broasts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('cla')->nullable();
             $table->timestamps();
        });

        Schema::create('grillss', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('cla')->nullable();
             $table->timestamps();
        });

        Schema::create('fatayers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('cla')->nullable();
             $table->timestamps();
        });




        Schema::create('sahwermas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('cla')->nullable();
             $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');

        Schema::dropIfExists('juicess');
        Schema::dropIfExists('appetizers');
        Schema::dropIfExists('falafels');

        Schema::dropIfExists('broasts');
        Schema::dropIfExists('grills');
        Schema::dropIfExists('fatayers');

        Schema::dropIfExists('sahwermas');
;
    }






};
