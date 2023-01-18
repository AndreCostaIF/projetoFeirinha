<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>

<body>
    <h1>Usuarios</h1>
    @if($errors->any())
        Erros:<br>
        @foreach($errors->all() as $error)
            {{$error}}
         @endforeach
    @endif
    <br><br>
    <form action="{{route('salvarUsuario')}}" method="POST">
        @csrf

        <input type="hidden" name="id"  value="{{$usuario['id']}}" ><br>
        <label>Nome</label><br>
        <input type="text" name="usuario"  value="{{$usuario['usuario']}}" ><br>
        @error('usuario')
        {{ $message }}
        @enderror
        <label>Senha</label><br>
        <input type="password" name="senha"  value="{{$usuario['senha']}}" ><br>
        @error('senha')
        {{ $message }}
        @enderror

        <label>Nome</label><br>
        <input type="text" name="nome"  value="{{$usuario['nome']}}" ><br>
        @error('nome')
        {{ $message }}
        @enderror
        <label>Tipo</label><br>
        <input type="text" name="tipo"   value="{{$usuario['tipo']}}" ><br>
        @error('tipo')
        {{ $message }}
        @enderror
        <label>Telefone</label><br>
        <input type="text" name="telefone"  value="{{$usuario['telefone']}}" ></br>
        @error('telefone')
        {{ $message }}
        @enderror
        <label>Instagram</label><br>
        <input type="text" name="instagram" value="{{$usuario['instagram']}}" ><br>
        @error('instagram')
        {{ $message }}
        @enderror
        <label>Email</label><br>
        <input type="email" name="email"   value="{{$usuario['email']}}" ><br>
        @error('tipo')
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
                    <th scope="col">Usuário</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Instagram</th>
                    <th scope="col">Email</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($usuarios as $usuario)
                    <td><a href="{{route('indexUsuario', $usuario['id'])}}">Editar</a></td>
                    <td>{{$usuario['id']}}</td>
                    <td>{{$usuario['usuario']}}</td>
                    <td>{{$usuario['nome']}}</td>
                    <td>{{$usuario['tipo']}}</td>
                    <td>{{$usuario['telefone']}}</td>
                    <td>{{$usuario['instagram']}}</td>
                    <td>{{$usuario['email']}}</td>
                    <td><a href="{{route('deletarUsuario', $usuario['id'])}}">Deletar</a></td>
                   

                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>