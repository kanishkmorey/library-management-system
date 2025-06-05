@extends('layouts.app')

@section('content')

    <h2>Add Member</h2>

    {{-- Using old() as the default value, so if an error occurs user can get their old data back, prevents refilling. --}}
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        Name: <input type="text" name="name" required value="{{ old('name') }}"><br>
        Email: <input type="email" name="email" required value="{{ old('email') }}"><br>
        Phone: <input type="text" name="phone" required value="{{ old('phone') }}"><br>
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