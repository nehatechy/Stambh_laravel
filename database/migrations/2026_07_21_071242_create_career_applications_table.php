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
       Schema::create('career_applications', function (Blueprint $table) {
        $table->id();
        $table->foreignId('career_id')->constrained('careers')->onDelete('cascade');
        $table->string('name');
        $table->string('email');
        $table->string('phone');
        $table->string('applied_for'); // job title at time of application
        $table->text('cover_message')->nullable();
        $table->string('resume'); // file path
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_applications');
    }
};
