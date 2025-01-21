<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/create_media_table.php
public function up()
{
    Schema::create('media', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('type'); // 'image' sau 'youtube'
        $table->string('path'); // URL imagine sau YouTube ID
        $table->foreignId('category_id')->constrained();
        $table->string('alt_text')->nullable();
        $table->text('description')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
