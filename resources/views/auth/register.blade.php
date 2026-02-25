<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <a href="/">Galvenā lapa</a>
        <a href="/login">Pierakstīties</a>
    <h1>Reģistrēties</h1>

    <form method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif
        <label>Vārds<input name="first_name" required value="{{ old('first_name') }}"></label>
        <label>Uzvārds<input name="last_name" required value="{{ old('last_name') }}"></label>
        <label>E-pasts<input name="email" type="email" required value="{{ old('email') }}"></label>
        <label>Parole<input name="password" type="password" required value="{{ old('password') }}"></label>
        <label>Paroles apstiprinājums<input name="password_confirmation" type="password" required value="{{ old('password_confirmation') }}"></label>
        <button>Reģistrēties</button>
    </form>
</body> 
</html>