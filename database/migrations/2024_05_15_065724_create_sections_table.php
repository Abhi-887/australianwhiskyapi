<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('title_tag');
            $table->string('title');
            $table->string('subtitle');
            $table->text('text');
            $table->string('background_type');
            $table->string('background_image')->nullable();
            $table->string('background_color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
