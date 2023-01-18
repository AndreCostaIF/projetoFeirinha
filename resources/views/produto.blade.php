@include('masterhead')

<!--MESMA COISA DAS OUTRAS PAG. OQ TIVER Q USAR USA, OQ N FOR USAR SO APAGAR -->
<div class="row mt-3">
    <div class="title text-center">
        <h2>NOME DO PRODUTO</h2>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-8">
        <div class="boxProduct bg-light">
            <div class="boxImgProduct  text-center">
                <img src="{{ asset('assets/imgprodutos/frutas/caju.png') }}" alt="" class="img-fluid">
            </div>

        </div>


    </div>
    <div class="col-sm-6 col-md-6 col-lg-4 boxProductPrice bg-light">

        <div class="alert alert-primary mt-4" role="alert">
            Preço:
            <div class="priceCard">
                <b>por R$4.599,99</b>
            </div>

            <div class="addCart">
                <form method="#" class="d-flex">
                    @csrf

                    <div class="d-flex justify-content-between">
                        <div class="col-5">

                            <div class="form-floating mb-3">
                                <div class="form-floating">
                                    <select class="form-select" name="qtd" id="qtd"
                                        aria-label="Floating label select example">
                                        <option value="" selected>Selecione</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>

                                    </select>
                                    <label for="qtd">Quantidade</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 btnGroup">
                            <button class="btn btn-dark" type="submit">Adicionar ao Carrinho <i
                                    class="bi bi-cart"></i></button>

                        </div>
                    </div>




                </form>
            </div>
        </div>

        <div class="d-flex mt-4 flex-column aux">
            <div class="p-2 bd-highlight">
                <p class="subtitle">Retirar na loja <i class="bi bi-send-check"></i><br><span
                        class="details">Logo após confirmação</span></p>
            </div>
        </div>

        <div class="resume mt-4">
            <h5 class="subtitle">Resumo:</h5>
            MacBook Pro 13” Apple Intel Core i5 16GB RAM - 512GB SSD Cinza-espacial
            O MacBook Pro vem com processador Intel de quatro núcleos que executa tarefas até 90% mais
            rápido*. Ele também tem a tela Retina brilhante e colorida com tecnologia True Tone para uma
            visualização mais confortável, Magic Keyboard retroiluminado, Touch ID e controles dinâmicos na
            Touch Bar...

        </div>
        <div class="buttonGroup mt-4">
            <p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Duvidas <i class="bi bi-question-circle"></i>
                </button>
            </p>
        </div>


    </div>
</div>

<div class="row mt-3 ">
    <div class="col-sm-6 col-md-6 col-lg-6 mb-3">
        <div class="card card-body text-center">
            <h5 class="subtitle">Descrição:</h5>
            MacBook Pro 13” Apple Intel Core i5 16GB RAM - 512GB SSD Cinza-espacial
            O MacBook Pro vem com processador Intel de quatro núcleos que executa tarefas até 90% mais
            rápido*. Ele também tem a tela Retina brilhante e colorida com tecnologia True Tone para uma
            visualização mais confortável, Magic Keyboard retroiluminado, Touch ID e controles dinâmicos na
            Touch Bar. É mais produtividade para tudo o que você faz. Aviso Legal: *Em comparação com o
            MacBook Pro de 13 polegadas com dois núcleos e duas portas Thunderbolt 3.Avisos legaisÉ possível
            personalizar a configuração do processador, da memória e do armazenamento.*Em comparação com a
            geração anterior do MacBook Pro de 13 polegadas com processador de dois núcleos.**A duração da
            bateria varia de acordo com o uso e a configuração. Consulte o site do fabricante para obter
            mais informações.
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 mb-3">

        <div class="card card-body">
            <h5 class="subtitle text-center">Especificações</h5>
            <hr>
            <table class="table table-hover">


                <tbody>
                    <tr>
                        <th>Processador</th>
                        <td>M1</td>
                    </tr>

                    <tr>
                        <th>Memoria ram</th>
                        <td>16GB</td>
                    </tr>

                    <tr>
                        <th>Armazenamento</th>
                        <td>256GB</td>
                    </tr>

                    <tr>
                        <th>Cor</th>
                        <td>Prata</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row mt-5">

    <div class="row title">
        <h2>Produtos relacionados</h2>
    </div>

</div>

<div class="row mt-5">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
