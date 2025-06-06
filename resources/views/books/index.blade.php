@extends('layouts.app')

@section('content')
    <h2>All Books</h2>
    <a href="{{ route('books.create') }}">Add Book</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Available</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->is_issued ? 'Issued' : 'Available' }}
                <td>
                    <a href="{{ route('books.edit', $book->id) }}"><button>Edit</button></a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
