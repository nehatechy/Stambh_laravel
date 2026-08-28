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
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'technology_used')) {
                $table->dropColumn('technology_used');
            }
            if (Schema::hasColumn('projects', 'project_url')) {
                $table->dropColumn('project_url');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (! Schema::hasColumn('projects', 'technology_used')) {
                $table->string('technology_used')->nullable()->after('client_name');
            }
            if (! Schema::hasColumn('projects', 'project_url')) {
                $table->string('project_url')->nullable()->after('technology_used');
            }
        });
    }
};
