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
    Schema::create('careers', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('location')->nullable();
        $table->string('job_type')->nullable(); // full-time, part-time, remote
        $table->string('experience_required')->nullable();
         $table->text('responsibilities')->nullable()->after('description');
        $table->text('requirements')->nullable()->after('responsibilities');
        $table->longText('description');
        $table->string('status')->default('active');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('careers', function (Blueprint $table) {
        $table->dropColumn(['responsibilities', 'requirements']);
    });
    }
};
