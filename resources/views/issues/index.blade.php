@extends('layouts.app')

@section('content')
    <h2>All Issues</h2>
    <a href="{{ route('issues.create') }}">Issue Book</a>
    <ul>
        @foreach($issues as $issue)
            <li>{{ $issue->book->title }} issued to {{ $issue->member->name }}</li>
        @endforeach
    </ul>
@endsection
