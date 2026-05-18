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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('logo')->nullable();
            $table->string('logo_dark')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_dribbble')->nullable();
            $table->string('social_behance')->nullable();
            $table->string('social_linkedin')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['logo', 'logo_dark', 'social_facebook', 'social_twitter', 'social_dribbble', 'social_behance', 'social_linkedin']);
        });
    }
};
