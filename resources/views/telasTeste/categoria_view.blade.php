<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>

<body>
    <h1>Categorias</h1>
    @if($errors->any())
    Erros:<br>
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
    @endif
    <br><br>
    <form action="{{route('salvarCategoria')}}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{$categoria['id']}}"><br>
        <input type="hidden" name="usuario_id" value=8><br>
        <label>Nome</label><br>
        <input type="text" name="nome" value="{{$categoria['nome']}}"><br>
        @error('nome')
        {{ $message }}
        @enderror
        <br><br>
        <button type="submit">Salvar</button>
    </form>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Editar</th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($categorias as $categoria)
                <td><a href="{{route('indexCategoria', $categoria['id'])}}">Editar</a></td>
                <td>{{$categoria['id']}}</td>
                <td>{{$categoria['nome']}}</td>
                <td><a href="{{route('deletarCategoria', $categoria['id'])}}">Deletar</a></td>


            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
</body>

</html>