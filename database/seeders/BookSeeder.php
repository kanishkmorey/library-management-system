<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds fot the Book table with dummy data.
     */
    public function run(): void
    {
        // Set of sample book categories.
        $categories = ['Fiction', 'Non-fiction', 'Science', 'History', 'Biography'];
        
        // Generate 10 sample entries.
        for ($i = 1; $i <= 10; $i++) {
            Book::create([
                'title' => 'Book Title ' . $i,                        // Random book title
                'author' => 'Author ' . $i,                            // Random author name
                'isbn' => 'ISBN' . rand(100000, 999999),              // Random ISBN number
                'category' => $categories[array_rand($categories)],   // Randomly selected category
                'copies' => rand(1, 5),                                // Random number of copies
                'is_issued' => false,                                  // Initially not issued
            ]);
        }
    }
}
