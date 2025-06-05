@extends('layouts.app')

@section('content')
    <h2>All Books</h2>
    <a href="{{ route('books.create') }}">Add Book</a>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
@endsection
