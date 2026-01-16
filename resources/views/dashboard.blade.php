<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
     <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<header>
    <h2>My Dashboard</h2>
</header>

<div class="container">
    <div class="card">
        <h3>Welcome, {{ auth()->user()->name }}</h3>
        <p>Email: {{ auth()->user()->email }}</p>

        <form method="POST" action="/logout" class="logout">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>

</body>
</html>
