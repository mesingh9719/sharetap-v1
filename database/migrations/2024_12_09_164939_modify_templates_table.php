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
        Schema::table('templates', function (Blueprint $table) {
            // Remove existing columns
            $table->dropColumn(['html', 'css', 'external_css_path']);

            // Add new columns
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('templates', function (Blueprint $table) {
            // Add back the removed columns
            $table->longText('html')->nullable();
            $table->longText('css')->nullable();
            $table->string('external_css_path')->nullable();

            // Drop the newly added columns
            $table->dropColumn(['file_name', 'file_path']);
        });
    }
};
