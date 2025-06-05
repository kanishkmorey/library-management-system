<?php

namespace App\Http\Controllers;

// Including all the locations to be used
use App\Models\Issue;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Displays a list of all issued books.
     */
    public function index()
    {
        $issues = Issue::with('book', 'member')->get();
        return view('issues.index', compact('issues'));
    }

    /**
     * Shows the form to issue a book.
     */
    public function create()
    {
        $books = Book::all();
        $members = Member::all();
        return view('issues.create', compact('books', 'members'));
    }

    /**
     * Stores a new issue record.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'member_id' => 'required|exists:members,id',
        ]);

        Issue::create([
            'book_id' => $request->book_id,
            'member_id' => $request->member_id,
            'issued_at' => now(),
        ]);

        return redirect()->route('issues.index')->with('success', 'Book issued successfully.');
    }

    /**
     * Marks a book as returned.
     */
    public function edit(Issue $issue)
    {
        return view('issues.edit', compact('issue'));
    }

    /**
     * Updates the issue record to mark it returned.
     */
    public function update(Request $request, Issue $issue)
    {
        $issue->update([
            'returned_at' => now()
        ]);

        return redirect()->route('issues.index')->with('success', 'Book marked as returned.');
    }

    /**
     * Deletes an issue record.
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();

        return redirect()->route('issues.index')->with('success', 'Issue record deleted.');
    }

    /**
     * View single issue record.
     */
    public function show(Issue $issue)
    {
        return view('issues.show', compact('issue'));
    }
}
