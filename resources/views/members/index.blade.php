@extends('layouts.app')

@section('content')
    <h2>All Members</h2>
    <a href="{{ route('members.create') }}">Add Member</a>
    <ul>
        @foreach($members as $member)
            <li>{{ $member->name }}</li>
        @endforeach
    </ul>
@endsection
