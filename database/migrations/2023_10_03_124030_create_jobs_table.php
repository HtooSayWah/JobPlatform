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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->integer("employer_id");
            $table->integer("specializaion_id");
            $table->string("location");
            $table->string("status");
            $table->string("salary");
            $table->text("responsibility");
            $table->text("requirement");
            $table->string("type");
            $table->dateTime('closing_date')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
