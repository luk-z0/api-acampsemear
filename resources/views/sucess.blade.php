<!-- resources/views/success.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Enviado com Sucesso</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            Formulário enviado com sucesso!
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>
