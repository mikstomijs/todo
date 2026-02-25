<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <a href="/">Galvenā lapa</a>
        <a href="/register">Izveidot kontu</a>
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <label>E-pasts<input type="email" name="email" value="{{ old('email') }}"></label>
        <label>Parole<input type="password" name="password" value="{{ old('password') }}"></label>
        <button>Pierakstīties</button>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</body>
</html>