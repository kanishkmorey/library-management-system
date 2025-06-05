<h2>Return Book</h2>

<p>Book: {{ $issue->book->title }}</p>
<p>Member: {{ $issue->member->name }}</p>

<form action="{{ route('issues.update', $issue->id) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">Mark as Returned</button>
</form>
