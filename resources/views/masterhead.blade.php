<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>IFSol</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon-intelnet.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">


</head>
<!--HEADER-->
<header class="mb-5">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
            <div class="border">
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="bi bi-list"></i> MENU
                </button>
            </div>
            <div class="dropdown">
                <a class="nav-link"> <i class="bi bi-caret-down"></i> Minha conta</a>
                <div class="dropdown-content">


                    <a href=""><i class="bi bi-cart2"></i>
                        Carrinho
                    </a>
                    <a href=""><i class="bi bi-person"></i>
                        Meus dados
                    </a>


                    <a href=""><i class="bi bi-box-arrow-right text-danger"></i>
                        Sair</a>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--//HEADER-->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <a href="">
            <div class="p-3 mb-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                Frutas
            </div>
        </a>
        <a href="">
            <div class="p-3 mb-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                Legumes
            </div>
        </a>
        <a href="">
            <div class="p-3 mb-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                Mercearia
            </div>
        </a>
        <a href="">
            <div class="p-3 mb-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                Verduras
            </div>
        </a>

    </div>
</div>

<body class="antialiased">
    <div class="container ">
