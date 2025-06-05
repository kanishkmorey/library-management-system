<?php

namespace App\Http\Controllers;

// Including all the locations to be used
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
     /**
     * Displays a list of all books.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Shows the form for creating a new book.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Stores a newly created book in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|unique:books',
            'category' => 'required',
            'copies' => 'required|integer|min:1'
        ]);

        // Save to database
        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }

    /**
     * Shows the form for editing the specified book.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Updates the specified book in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|unique:books,isbn,' . $book->id,
            'category' => 'required',
            'copies' => 'required|integer|min:1'
        ]);

        // Updates the book
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Removes the specified book from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }

    /**
     * Displays the specified book.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}
