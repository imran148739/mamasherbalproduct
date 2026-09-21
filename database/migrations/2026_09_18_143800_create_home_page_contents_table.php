<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('section');   // e.g. 'hero_slider', 'banner', 'testimonial'
            $table->string('key');       // e.g. 'slide_1_title', 'banner_1_image'
            $table->text('value')->nullable();
            $table->string('type')->default('text'); // 'text', 'image', 'url', 'textarea'
            $table->timestamps();

            $table->unique(['section', 'key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_page_contents');
    }
};
