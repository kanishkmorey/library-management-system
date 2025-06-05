<h2>Add Book</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    Title: <input type="text" name="title"><br>
    Author: <input type="text" name="author"><br>
    ISBN: <input type="text" name="isbn"><br>
    Category: <input type="text" name="category"><br>
    Copies: <input type="number" name="copies"><br>
    <button type="submit">Add</button>
</form>
