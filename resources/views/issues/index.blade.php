@extends('layouts.app')

@section('content')
    <h2>All Issues</h2>
    <a href="{{ route('issues.create') }}">Issue Book</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Book</th>
                <th>Member</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($issues as $issue)
            <tr>
                <td>{{ $issue->book->title }}</td>
                <td>{{ $issue->member->name }}</td>
                <td>
                    <a href="{{ route('issues.edit', $issue->id) }}"><button>Edit</button></a>
                    <form action="{{ route('issues.destroy', $issue->id) }}" method="POST" style="display:inline">
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