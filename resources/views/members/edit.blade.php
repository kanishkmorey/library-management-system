<h2>Edit Member</h2>

<form action="{{ route('members.update', $member->id) }}" method="POST">
    @csrf
    @method('PUT')
    Name: <input type="text" name="name" value="{{ $member->name }}"><br>
    Email: <input type="email" name="email" value="{{ $member->email }}"><br>
    Phone: <input type="text" name="phone" value="{{ $member->phone }}"><br>
    <button type="submit">Update</button>
</form>
