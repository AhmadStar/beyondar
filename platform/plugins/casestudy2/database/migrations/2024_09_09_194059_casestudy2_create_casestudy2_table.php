<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('casestudy2s', function (Blueprint $table) {
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

        Schema::create('casestudy2s_translations', function (Blueprint $table) {
            $table->string('lang_code');
            $table->string('description', 400)->nullable();
            $table->longText('content')->nullable();
            $table->foreignId('casestudy2s_id');
            $table->string('name', 255)->nullable();

            $table->primary(['lang_code', 'casestudy2s_id'], 'casestudy2s_translations_primary');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('casestudy2s');
        Schema::dropIfExists('casestudy2s_translations');
    }

};
