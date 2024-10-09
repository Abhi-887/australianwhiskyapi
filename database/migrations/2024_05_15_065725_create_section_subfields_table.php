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
        Schema::create('section_subfields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->string('title_color');
            $table->string('subtitle_color');
            $table->string('text_color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_subfields');
    }
};
