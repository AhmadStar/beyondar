<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (! Schema::hasTable('projects')) {
            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description', 400)->nullable();
                $table->longText('content')->nullable();
                $table->string('status', 60)->default('published');
                $table->string('image')->nullable();
                $table->text('images')->nullable();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('projects_translations')) {
            Schema::create('projects_translations', function (Blueprint $table) {
                $table->string('lang_code');
                $table->foreignId('projects_id');
                $table->string('name', 255)->nullable();

                $table->primary(['lang_code', 'projects_id'], 'projects_translations_primary');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('projects_translations');
    }
};
