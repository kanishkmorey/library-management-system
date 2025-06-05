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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Primary key for books table
            $table->string('title'); // Title of the book
            $table->string('author'); // Author of the book
            $table->string('isbn')->unique(); // ISBN code of the book
            $table->string('category'); // Genre or the category of the book.
            $table->integer('copies')->default(1); // Number of copies of the book in the library.
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
