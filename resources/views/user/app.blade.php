<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your CSS file -->
</head>
<body>
    <div id="app">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('user') }}">Dashboard</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>
        <h1>Welcome to the User Dashboard</h1>
        <div class="content">
            @yield('content') <!-- Placeholder for content -->
        </div>
    </div>
</body>
</html>
