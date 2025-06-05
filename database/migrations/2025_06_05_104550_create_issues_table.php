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
        Schema::create('issues', function (Blueprint $table) {
            $table->id(); // Primary key for the issue table
            // Foriegn key fot the current member and book
            // constrained() automatically generates foriegn key of the Book and Member table
            // onDelete('cascade') deletes all the record of this table when the book or member is deleted
            $table->foreignId('book_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            // Timestamp when the book was issue, also useCurrent() sets the timestamp at the creation of record.
            $table->timestamp('issued_at')->useCurrent();
            // Timestamp when the book was returned, added nullable so this can remain empty when the book is not returned
            $table->timestamp('returned_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
