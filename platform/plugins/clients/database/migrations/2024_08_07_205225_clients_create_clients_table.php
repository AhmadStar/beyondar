<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (! Schema::hasTable('clients')) {
            Schema::create('clients', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255);
                $table->string('logo', 255);
                $table->string('link', 255);
                $table->text('content');
                $table->string('status', 60)->default('published');
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('clients_translations')) {
            Schema::create('clients_translations', function (Blueprint $table) {
                $table->string('lang_code');
                $table->foreignId('clients_id');
                $table->string('name', 255)->nullable();
                $table->text('content')->nullable();
                $table->primary(['lang_code', 'clients_id'], 'clients_translations_primary');
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('clients_translations');
    }
};
