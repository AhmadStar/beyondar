<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 400)->nullable();
            $table->longText('content')->nullable();
            $table->string('status', 60)->default('published');
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->foreignId('project_id')->nullable();
            $table->timestamps();
        });

        Schema::create('case_studies_translations', function (Blueprint $table) {
            $table->string('lang_code');
            $table->string('description', 400)->nullable();
            $table->longText('content')->nullable();
            $table->foreignId('case_studies_id');
            $table->string('name', 255)->nullable();

            $table->primary(['lang_code', 'case_studies_id'], 'case_studies_translations_primary');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('case_studies');
        Schema::dropIfExists('case_studies_translations');
    }
};
