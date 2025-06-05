@extends('layouts.app')

@section('content')
    <h2>All Members</h2>
    <a href="{{ route('members.create') }}">Add Member</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>
                    <a href="{{ route('members.edit', $member->id) }}"><button>Edit</button></a>
                    <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline">
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
