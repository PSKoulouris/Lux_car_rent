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
        Schema::create('link_cars_types', function (Blueprint $table) {
            // $table->id();
            // columns for foreign keys/ primary
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('car_type_id');
            $table->timestamps();
            // primary key definition
            $table->primary(['car_id','car_type_id']);
            //foreign key constraint
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('car_type_id')->references('id')->on('cars_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_cars_types');
    }
};
