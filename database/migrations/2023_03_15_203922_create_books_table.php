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
            $table->string('genre')->nullable();
            $table->decimal('price', 10, 2);
            $table->foreignIdFor(Publisher::class)->constrained()->cascadeOnDelete();
            $table->date('publication_date')->nullable();
            $table->string('language')->nullable();
//            $table->string('cover_type')->nullable();
            $table->integer('page_count')->nullable();
            $table->longText('description')->nullable();;
            $table->decimal('rating', 2, 1)->nullable();
            $table->integer('num_ratings')->default(0);
            $table->string('image_url')->nullable();
            $table->text('file_path')->nullable();
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
