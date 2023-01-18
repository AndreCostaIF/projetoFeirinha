<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enderecos</title>
</head>

<body>
    <h1>Enderecos</h1>
    @if($errors->any())
        Erros:<br>
        @foreach($errors->all() as $error)
            {{$error}}
         @endforeach
    @endif
    <br><br>
    <form action="{{route('salvarEndereco')}}" method="POST">
        @csrf

        <input type="hidden" name="id"  value="{{$endereco['id']}}" ><br>
        <input type="hidden" name="usuario_id"  value=8 ><br>
        <label>Rua</label><br>
        <input type="text" name="rua"  value="{{$endereco['rua']}}" ><br>
        @error('numero')
        {{ $message }}
        @enderror
        <label>Número</label><br>
        <input type="text" name="numero"  value="{{$endereco['numero']}}" ><br>
        @error('numero')
        {{ $message }}
        @enderror

        <label>Complemento</label><br>
        <input type="text" name="complemento"  value="{{$endereco['complemento']}}" ><br>
        @error('complemento')
        {{ $message }}
        @enderror
        <label>Referência</label><br>
        <input type="text" name="referencia"   value="{{$endereco['referencia']}}" ><br>
        @error('referencia')
        {{ $message }}
        @enderror
        <label>Bairro</label><br>
        <input type="text" name="bairro"  value="{{$endereco['bairro']}}" ></br>
        @error('bairro')
        {{ $message }}
        @enderror
        <label>UF</label><br>
        <input type="text" name="uf" value="{{$endereco['uf']}}" ><br>
        @error('uf')
        {{ $message }}
        @enderror
        <label>Cidade</label><br>
        <input type="text" name="cidade"   value="{{$endereco['cidade']}}" ><br>
        @error('cidade')
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
                    <th scope="col">Rua</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">UF</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($enderecos as $endereco)
                    <td><a href="{{route('indexEndereco', $endereco['id'])}}">Editar</a></td>
                    <td>{{$endereco['id']}}</td>
                    <td>{{$endereco['rua']}}</td>
                    <td>{{$endereco['numero']}}</td>
                    <td>{{$endereco['complemento']}}</td>
                    <td>{{$endereco['referencia']}}</td>
                    <td>{{$endereco['bairro']}}</td>
                    <td>{{$endereco['uf']}}</td>
                    <td>{{$endereco['cidade']}}</td>
                    <td><a href="{{route('deletarEndereco', $endereco['id'])}}">Deletar</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>