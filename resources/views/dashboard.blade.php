<!DOCTYPE html>
<html>
<head>
    <title>マイダッシュボード</title>
     <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<header>
    <h2></h2>
</header>

<div class="container">
    <div class="card">
        <h3>ようこそ, {{ auth()->user()->name }}</h3>
        <p>メール: {{ auth()->user()->email }}</p>

        <form method="POST" action="/logout" class="logout">
            @csrf
            <button type="submit">ログアウト</button>
        </form>
    </div>
</div>

</body>
</html>
