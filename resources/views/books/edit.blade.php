<h2>Edit Book</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    Title: <input type="text" name="title" value="{{ $book->title }}"><br>
    Author: <input type="text" name="author" value="{{ $book->author }}"><br>
    ISBN: <input type="text" name="isbn" value="{{ $book->isbn }}"><br>
    Category: <input type="text" name="category" value="{{ $book->category }}"><br>
    Copies: <input type="number" name="copies" value="{{ $book->copies }}"><br>
    <button type="submit">Update</button>
</form>
