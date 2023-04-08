<?php

use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Author::class)->constrained()->cascadeOnDelete();
            $table->decimal('price', 10, 2);
            $table->foreignIdFor(Publisher::class)->constrained()->cascadeOnDelete();
            $table->date('publication_date')->nullable();
            $table->string('language')->nullable();
            $table->integer('page_count')->nullable();
            $table->longText('description')->nullable();;
            $table->decimal('rating', 8, 2)->nullable();
            $table->integer('num_ratings')->default(0);
            $table->string('video_url')->nullable();
            $table->string('image_url')->nullable();
            $table->string('banner_image_url')->nullable();
            $table->text('file_path')->nullable();
            $table->boolean('is_recommended')->default(0);
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_banner')->default(0);
            $table->boolean('is_on_sale')->default(0);
            $table->integer('discount_percentage')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
