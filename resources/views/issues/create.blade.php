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
