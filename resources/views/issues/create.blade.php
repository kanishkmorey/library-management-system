

@extends('layouts.app')

@section('content')

    <h2>Issue Book</h2>

    <form action="{{ route('issues.store') }}" method="POST">
        @csrf
        Book:
        <select name="book_id">
            @foreach ($books as $book)
                <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select><br>

        Member:
        <select name="member_id">
            @foreach ($members as $member)
                <option value="{{ $member->id }}">{{ $member->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">Issue Book</button>
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
