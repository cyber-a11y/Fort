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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('category');
            $table->text('description');
            $table->string('location');
            $table->unsignedInteger('size');
            $table->unsignedInteger('bedrooms');
            $table->unsignedInteger('bathrooms');
            $table->string('status');
            $table->unsignedInteger('price');
            $table->timestamps();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained(); //assuming foreign key relationship
            $table->string('image_url');
            $table->timestamps();
        });

        Schema::create('document', function (Blueprint $table){

            $table->id();
            $table->foreignId('property_id')->constrained();
            $table->string('document type');
            $table->string('document_url');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
