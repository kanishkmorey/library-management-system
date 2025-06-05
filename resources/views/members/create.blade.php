<h2>Add Member</h2>

<form action="{{ route('members.store') }}" method="POST">
    @csrf
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    <button type="submit">Add</button>
</form>
