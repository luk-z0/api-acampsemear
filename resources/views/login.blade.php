<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                {{ $errors->has('email') ? $errors->first('email') : '' }}
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password"
                    value="{{ old('password') }}">
                {{ $errors->has('password') ? $errors->first('password') : '' }}
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        {{ isset($erro) && $erro != '' ? $erro : '' }}
    </div>
</body>

</html>
