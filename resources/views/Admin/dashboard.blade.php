<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>
    <ul>
        <li><a href="{{ route('admin.users') }}">Users</a></li>
        <li><a href="{{ route('admin.posts') }}">Posts</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
