@extends('layouts.app')

@section('content')
    <h2>All Issues</h2>
    <a href="{{ route('issues.create') }}">Issue Book</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Book</th>
                <th>Member</th>
                <th>Issued At</th>
                <th>Returned At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($issues as $issue)
            <tr>
                <td>{{ $issue->book->title }}</td>
                <td>{{ $issue->member->name }}</td>
                <td>{{ \Carbon\Carbon::parse($issue->issued_at)->format('d M Y, h:i A') }}</td>
                <td>
                    @if($issue->returned_at)
                        {{ \Carbon\Carbon::parse($issue->returned_at)->format('d M Y, h:i A') }}
                    @else
                        Not Returned
                    @endif
                </td>
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