@include('masterhead')

<div class="row">
    <span class="h1 text-primary text-uppercase mb-5">Categorias</span>
</div>
<div class="row">
    <div class="card-group">
        <!--
            ADD UM FOREACH AQUI COM TODOS AS CATEGORIAS QUE VEM DO BANCO;
            DEIXAR OS NOMES DINAMICOS;
            SE QUISER PODE ALTERAR AS IMG;

            FOERACH
        -->
        <div class="card boxTools">
            <a href="">
          <img src="{{ asset('assets/imgprodutos/frutas/maca.png') }}" class="card-img-top" alt="...">

          <div class="card-body">
            <h2 class="card-title text-center">Frutas</h2>
            <p class="card-text"></p>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">Clique para ver os comerciantes</small>
          </div></a>
        </div>
        <!--
            ENDFOREACH

            PS: PODE APAGAR TUDO DAQUI PRA BAIXO ↓↓↓↓↓ MENOS O FOOTER
        -->
        <div class="card boxTools">
            <a href="">
          <img src="{{ asset('assets/imgprodutos/legumes/abobora.png') }}" class="card-img-top" alt="...">

          <div class="card-body">
            <h2 class="card-title text-center">Legumes</h2>
            <p class="card-text"></p>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">Clique para ver os comerciantes</small>
          </div></a>
        </div>

        <div class="card boxTools">
            <a href="">
          <img src="{{ asset('assets/imgprodutos/mercearia/fava.png') }}" class="card-img-top" alt="...">

          <div class="card-body">
            <h2 class="card-title text-center">Mercearia</h2>
            <p class="card-text"></p>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">Clique para ver os comerciantes</small>
          </div></a>
        </div>

        <div class="card boxTools">
            <a href="">
          <img src="{{ asset('assets/imgprodutos/verduras/espinafre.png') }}" class="card-img-top" alt="...">

          <div class="card-body">
            <h2 class="card-title text-center">Verduras</h2>
            <p class="card-text"></p>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">Clique para ver os comerciantes</small>
          </div></a>
        </div>
      </div>
</div>
@include('footer')
