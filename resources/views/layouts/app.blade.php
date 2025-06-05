<!DOCTYPE html>
<html>
<head>
    <title>Library System</title>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>
            <a href='{{ url("/") }}'>Home</a> |
            <a href='{{ route("books.index") }}'>Books</a> |
            <a href='{{ route("members.index") }}'>Members</a> |
            <a href='{{ route("issues.index") }}'>Issues</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
