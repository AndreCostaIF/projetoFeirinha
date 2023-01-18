<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<title>Cadastro - IFSol</title>
<link rel="icon" type="image/x-icon" href="{{asset('assets/favicon-intelnet.ico')}}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/style.css') }}">

<body>
    <div class="container ">
        <div class="loginHeader mt-5">
            <img src="{{ asset('assets/logo.jpg') }}" class="col-6" alt="">

            @if (session('erro'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-exclamation-triangle"></i> {{session('erro')}}
                </div>
            @endif
        </div>

        <div class="d-flex justify-content-center mt-3">
            <div class="col-4">
                <img class="imgLogin" src="{{asset('assets/login.svg')}}" alt="">
            </div>

            <div class="col-4 boxLogin">
                <div>
                    <h4 class=" mt-3">Cadastro de produto</h4>
                    <form action="{{route('logar')}}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="nome" class="form-control" placeholder="nome"
                                required>
                            <label for="floatingInput"  id="nome">Nome do produto</label>
                        </div>

                        <!-- COLOCA MAIS CAMPOS Q VCS VAO PRECISAR AE-->


                        <div class="form-floating mb-3 mt-3 mb-3 text-center">
                            <button type="submit" class="btn btn-outline-danger" id="botaoForm">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@include('footer')
