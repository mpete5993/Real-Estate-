<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('street', 250)->nullable();
            $table->string('city', 250)->nullable();;
            $table->string('province', 250)->nullable();;
            $table->string('zipCode', 250)->nullable();;
            $table->string('price', 250)->nullable();;
            $table->string('description', 250)->nullable();;
            $table->longText('details')->nullable();
            $table->string('slug', 250)->unique();
            $table->string('image', 250)->nullable();
            $table->string('status', 250)->default('for Sale');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('properties');
    }
}
