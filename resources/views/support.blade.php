<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-between">
            <h2 class="">Formulário</h2>
            <div class="">
                <button class="btn btn-primary right" align="right"><a href="{{ route('logout') }}">Sair</a></button>
            </div>
        </div>

        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
                @if ($errors->has('name'))
                    {{ $errors->first('name') }}
                @endif
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone">
                {{ $errors->has('phone') ? $errors->first('phone') : '' }}
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                {{ $errors->has('email') ? $errors->first('email') : '' }}

            </div>
            <div class="form-group">
                <label for="motivation">Motivação</label>
                <select name="support_motivations_id" id="motivation" class="form-control">
                    <option value="">Selecione um motivo</option>
                    @foreach ($motivations as $key => $motivation)
                        <option value="{{ $motivation->id }}"
                            {{ old('support_motivations_id') == $motivation->id ? 'selected' : '' }}>
                            {{ $motivation->motivation }}</option>
                    @endforeach
                </select>
                {{ $errors->has('support_motivations_id') ? $errors->first('support_motivations_id') : '' }}

            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Digite aqui...">{{ old('description') != '' ? old('description') : '' }}</textarea>
                {{ $errors->has('description') ? $errors->first('description') : '' }}
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>
