@extends('layouts.app')

@section('content')

    <h2>Add Book</h2>
    
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        {{-- Using old() as the default value, so if an error occurs user can get their old data back, prevents refilling. --}}
        Title: <input type="text" name="title" required value="{{ old('title') }}"><br> 
        Author: <input type="text" name="author" required value="{{ old('author') }}"><br>
        ISBN: <input type="text" name="isbn" required value="{{ old('isbn') }}"><br>
        Category: <input type="text" name="category" required value="{{ old('category') }}"><br>
        Copies: <input type="number" name="copies" required value="{{ old('copies') }}"><br>
        <button type="submit">Add</button>
    </form>
    {{-- Showing error to the user when server side error occurs such as failing a server side requirement. --}}
    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> 
        </div>
    @endif

@endsection