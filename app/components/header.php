    
    <header class="d-flex justify-content-center py-3 sticky-top">
      <div class="container-fluid">
        <div class="row">

            <div class="col">
              <!-- Button trigger modal -->
              <button type="button" 
                      class="botao fg-botao-menu" 
                      data-bs-toggle="modal" 
                      data-bs-target="#modal-menu">
                      <i class="fi fi-rr-bars-sort"></i> Menu
              </button>

            </div>

            <div class="col-12 col-sm-5 col-lg-8 centro">
              <a href="<?= BASE ?>">
                <img src="<?= BASE_IMG ?>marcas/felipe_goncalves_imagotipo.svg" alt="" class = "navbar-brand fg-logo">
              </a>
            </div>

            <div class="col-12 col-sm-2 col-lg-2 para-pc d-flex justify-content-end">
              <a href="<?= BASE ?>fale-comigo" class = "botao fg-botao"> Solicitar proposta </a>
            </div>

        </div>
      </div>
    </header>


    <!-- Modal menu -->
    <div class="modal fade modal-menu" id="modal-menu" tabindex="-1" aria-labelledby="ModalMenu" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen fundo-preto">
        <div class="modal-content fundo-preto cinza-2">

          <div class="modal-header">
            <h1 class="modal-title fs-5 cinza-6" id="ModalMenu">FG Menu</h1>
            <a href="#" class="botao f-transparente branco f-16 negrito" data-bs-dismiss="modal">Fechar</a>
            <!-- <a href="#" class="botao f-transparente branco f-16 negrito" data-bs-dismiss="modal">X</a> -->
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-12 col-sm-11 col-lg-5">

                  <ul class="nav flex-column ul-menu-itens">
                    <li class="nav-item">
                      <a class="nav-link" href="<?= BASE ?>">Início</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= BASE ?>minhas-solucoes">Minhas soluções</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= BASE ?>projetos">Projetos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= BASE ?>sobre-mim">Sobre mim</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= BASE ?>fale-comigo">Fale comigo</a>
                    </li>
                  </ul>

                </div>
              </div>

              <div class="row">
                <div class="col-12 col-sm-11 col-lg-8">

                  <nav class="nav flex-column ul-contato-itens mt-5">
                    <a class="nav-link" href="#" target="_blank">
                      <i class="fi fi-rr-mobile-notch"></i> 67 9 9940 3107 &#8599;
                    </a>
                    <a class="nav-link" href="mailto:contato@felipegoncalves.com" target="_blank">
                     <i class="fi fi-rr-paper-plane"></i> contato@felipegoncalves.com 	&#8599;
                    </a>
                  </nav>

                </div>
              </div>

              <div class="row">
                <div class="col-12 col-sm-11 col-lg-8">
                    <p class = "f-14 mt-4 mb-3 cinza-7">&copy; Felipe Gonçalves. Todos os direitos reservados</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
     
