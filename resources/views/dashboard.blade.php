<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
        }

        header {
            background: #1f2937;
            color: white;
            padding: 15px 30px;
        }

        .container {
            padding: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 400px;
        }

        .logout {
            margin-top: 15px;
        }
    </style>
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
