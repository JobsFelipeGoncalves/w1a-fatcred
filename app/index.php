
<!doctype html>
<html lang="pt-br">
<head>

  <title>Fatcred Imprestimos e Financiamentos</title>
  <meta charset="UTF-8">
  <meta name="viewport"              content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description"           content="Empréstimos para aposentados e pensionista do INSS, empréstimo de cartão de crétido e Saque FGTS"/>
  <meta name="keywords"              content=" index, MS, mato grosso do sul"/>
  <meta name="robots"                content="index, follow" />
  <meta name="author"              content="W1 Agência / dev: Felipe Gonçalves - jobs.felipegoncalves@gmail.com"/>


  <meta property="og:locale"       content="pt_BR">
  <meta property="og:site_name"    content="Fatcred">
  <meta property="og:url"          content="<?= BASE ?>" />
  <meta property="og:type"         content="website" />
  <meta property="og:title"        content="Fatcred Imprestimos e Financiamentos" />
  <meta property="og:description"  content="Empréstimos para aposentados e pensionista do INSS, empréstimo de cartão de crétido e Saque FGTS " />
  <meta property="og:image"        content="<?= BASE_IMG ?>marcas/logo-fatcred.png" />


  <link rel="canonical" href="<?= BASE ?>">
  <link rel="icon" href="<?= BASE_IMG ?>marcas/isotipo-fatcred.png">
  <link rel="stylesheet" href="<?= BASE_CSS ?>bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_CSS ?>fg.min.css">  
  <link rel="stylesheet" href="<?= BASE_CSS ?>estilo.responsivo.min.css">




</head>
<body id = "pagina-inicial">

  <!-- Header -->
  <?php require "components/header.php"; ?>

      <!-- body -->
          <!-- === Apresentação === -->
          <section id = "apresentacao" class = "pt-5 pb-5 f-azul-escuro">
            <div class="container  pb-5 pt-5 mt-5">
              <div class="row mt-5">
                <div class="col-9 col-sm-4 col-lg-2">
                  
                    <img  src = "<?= BASE_IMG ?>extra/slide.png"/>


                </div>
                <div class="col-12 col-sm-11 col-lg-6">
                    
                    <h1 class="display-3 negrito branco">
                      O melhor crédito para você
                    </h1>

                    <p class = "mt-4">
                      <a href="#mensagem" class = "botao botao-branco botao-grande f-20">Saiba mais</a>
                    </p> 
                </div>

                <div class="col-12 col-sm-12 col-lg-4"></div>
              </div>


            </div>
          </section>

          <!-- === Sobre === -->
          <section id = "sobre" class = "fundo-laranja branco pt-5 pb-5">
            <div class="container pt-5 pb-5 mt-5">
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-5 p-3 branco">
                  
                    <h1 class="negrito display-5 branco">A FatCred</h1>

                    <p class = "branco">
                      Desde 2006, a Fatcred atua no mercado de crédito
                      consignado e pessoal, passando a fazer da história de
                      milhares de pessoas, um compromisso que se reflete
                      em sua marca.

                    </p>

                    <p class = "branco">
                      A Fatcred possui filiais em várias cidades do interior do
                      Estado e alia conhecimento técnico, idoneidade e bom
                      relacionamento com as melhores instituições bancárias,
                      sendo referência e verdadeiro sinônimo de credibilidade.
                      Para chegar a esse patamar, a Fatcred conta com a
                      dedicação de seus agentes e colaboradores.
                    </p>

                    <p class = "branco">
                      Para chegar a esse patamar, a Fatcred conta com a
                      dedicação de seus agentes e colaboradores.
                    </p>
                </div>

                <div class="col-12 col-sm-12 col-lg-1 p-3 centro"></div>

                <div class="col-12 col-sm-12 col-lg-6 p-3 centro">
                  
                    <div class="slide-unidade ">
                      <img src = "<?= BASE_IMG ?>extra/QUEMSOMOS.png" class="slider-unidade-imagem img-fluid" />
                      <p class = "slider-unidade-texto mt-5 f-18">
                        Unidade em <strong>Fátima do Sul</strong>
                      </p>
                    </div>

                </div>
              </div>
            </div>
          </section>

          <!-- === misao etc === -->
         <section id = "valores" class = "f-cinza-1 pt-5 pb-5">
            <div class="container pt-5 pb-5 mt-5">
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-11 m-auto">


                  <div class="row m-auto centro">
                    <div class="col-12 col-sm-12 col-lg-4 p-4 mb-3">
                        <img src="<?= BASE_IMG ?>extra/missao.png" width="200px">
                        <h5 class = "negrito f-18">Missão</h5>
                        <p class = "mt-3">
                          Garantir a excelência na entrega de
                          produtos e serviços, maximizando
                          valores para os Clientes, Parceiros
                          e Colaboradores.
                        </p>
                    </div>


                    <div class="col-12 col-sm-12 col-lg-4 p-4 mb-3">
                        <img src="<?= BASE_IMG ?>extra/visao.png" width="200px">
                        <h5 class = "negrito f-18">Visão</h5>
                        <p class = "mt-3">
                          Ser reconhecida em todo território
                          nacional como uma instituição que é
                          dotada de política moderna de gestão
                          de pessoas, que presta serviços com
                          excelência, que é referência no mercado
                          em que atua e que é justa e sólida.
                        </p>
                    </div>


                    <div class="col-12 col-sm-12 col-lg-4 p-4 mb-3">
                        <img src="<?= BASE_IMG ?>extra/valores.png" width="200px">
                        <h5 class = "negrito f-18">Valores</h5>
                        <p class = "mt-3">
                          Ética, profissionalismo,
                          respeito e comprometimento
                        </p>
                    </div>
                  </div>

                  
                </div>
              </div>
            </div> 
          </section>

           <!-- === INSS === -->
          <section id = "inss" class = "pt-5 pb-5">
            <div class="container pt-5 pb-5 mt-5">
              <div class="row">
                
                <div class="col-12 col-sm-12 col-lg-4 centro">
                  <h1 class="display-3 negrito cinza-5">INSS</h1>
                </div>

                <div class="col-12 col-sm-12 col-lg-8 d-flex">
                  <div class = "align-self-center" style = "width: 100%; height: 5px; background-color: var(--cor-cinza-500);"></div>
                </div>

              </div>

              <div class="row mt-5">
                <div class="col-12 col-sm-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-lg-5 m-auto">

                    <div class="row decimo-terceiro ">
                          <div class="col-2 col-sm-2 col-lg-2">
                              <img src="<?= BASE_IMG ?>extra/decimo-icone.png">
                          </div>

                          <div class="col-2 col-sm-2 col-lg d-flex">
                            <p class = "branco f-26 align-self-center">
                              Antecipação de
                              <b>Décimo Terceiro</b>
                            </p>
                              
                          </div>
                    </div>
                  
                </div>
                 <div class="col-12 col-sm-12 col-lg-1"></div>

                <div class="col-12 col-sm-12 col-lg-5 m-auto">

                    <div class="row repre-legal ">
                          <div class="col-2 col-sm-2 col-lg-2">
                              <img src="<?= BASE_IMG ?>extra/responsavel-legal.png">
                          </div>

                          <div class="col-2 col-sm-2 col-lg d-flex">
                            <p class = "branco f-26 align-self-center ">
                              Empréstimos para                               
                              <b>Representate Legal</b>
                            </p>
                              
                          </div>
                    </div>

                   
                </div>
                  <div class="col-12 col-sm-12 col-lg-1"></div>

              </div>
            </div>
          </section>


          <!-- === Empréstimos === -->
          <section id = "emprestimos" class = "pt-5">
            <div class="container pt-5 mt-5">
              <div class="row mb-5">
                <div class="col-12 col-sm-12 col-lg-4 centro m-auto">
                  <h1 class = "display-4 negrito">Empréstimos</h1>
                </div>
                <div class="col-12 col-sm-12 col-lg-4 m-auto">
                    <div class="texto-titulo f-cinza-8 branco">
                        Confira os empréstimos
                        que temos para alavancar
                        sua vida financeira!
                    </div>
                </div>
              </div>


              <div class="row pt-5 mt-5 f-16 negrito branco">
                <div class="col-12 col-sm-6 col-lg-2 m-auto">
                  <img src="<?= BASE_IMG ?>extra/aposentados-emp.png">
                  <p>
                    Para Aposentados
                  </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 m-auto">
                  <img src="<?= BASE_IMG ?>extra/pensionaistas-emp.png">
                  <p>
                    Para Pensionistas
                  </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 m-auto">
                  <img src="<?= BASE_IMG ?>extra/servidores-emp.png">
                  <p>
                    Para Servidor Público 
                  </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 m-auto">
                  <img src="<?= BASE_IMG ?>extra/forcas-emp.png">
                  <p>
                    Para Forças Armadas
                  </p>
                </div>

                <div class="col-12 col-sm-6 col-lg-2 m-auto">
                  <img src="<?= BASE_IMG ?>extra/credito-emp.png">
                  <p>
                    Cartões de Crédito
                  </p>
                </div>
              </div>

            </div>
          </section>

          <!-- === financiamento === -->
          <section id = "financiamento" class = "branco pt-5 pb-5" style = "background-color: #727376 !important;">
            <div class="container pb-5 pt-5 mt-5">
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-12 centro">
                  <h1 class = "display-4 branco negrito">Financiamentos</h1>
                </div>
              </div>

              <div class="row mt-5 centro fonte-normal f-18">
                <div class="col-12 col-sm-6 col-lg-3 centro">
                  <img src="<?= BASE_IMG ?>extra/aposentados.png">
                  <p>
                    Para Aposentados
                  </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                  <img src="<?= BASE_IMG ?>extra/PENSIONISTAS.png">
                  <p>
                    Para Pensionistas
                  </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                  <img src="<?= BASE_IMG ?>extra/SERVIDOR-PUBLICO.png">
                  <p>
                    Para Servidor Público 
                  </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                  <img src="<?= BASE_IMG ?>extra/FORCASARMADAS.png">
                  <p>
                    Para Forças Armadas
                  </p>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-12 col-sm-12 col-lg-12 centro">
                    <p class = "mt-4">
                      <a href="#mensagem" class = "botao botao-laranja botao-medio ">Simular financiamento</a>
                    </p>                  
                </div>
              </div>
            </div>
          </section>

           <!-- === fgts === -->
          <section id = "saqueAniversario" class="fundo-laranja pt-5 pb-5">
            <div class="container mt-5 pt-5 pb-5">
              <div class="row">
                <div class="col-12 col-sm-10 col-lg-6">
                    <h1 class="display-3 branco negrito">

                      <span class = "cor-amarelo">
                      Antecipe seu
                      Saque Aniversário</span>
                      e ganhe um fôlego
                      nas finanças!
                    </h1>

                    <p class = "mt-4">
                      <a href="#mensagem" class = "botao botao-azul-escuro botao-medio ">Solicitar agora</a>
                    </p>
                  
                </div>
              </div>
            </div>
          </section>

          <!-- === fgts === -->
          <section id = "fgts" class="fundo-azul-escuro pt-5">
            <div class="container pt-5 pb-5">
              <div class="row mt-5">
                <div class="col-12 col-sm-10 col-lg-5">
                    <h1 class="display-3 branco negrito">

                      Consulte seu
                      <span class = "amarelo">FGTS</span> agora
                      mesmo!
                    </h1>

                    <p class = "mt-4">
                      <a href="#mensagem" class = "botao botao-laranja botao-medio ">Solicitar agora</a>
                    </p>
                  
                </div>
              </div>
            </div>
          </section>

          <!-- === depoimentos === -->
          <section id = "depoimento" class = "f-laranja branco pt-5 pb-5">
            <div class="container pt-5 pb-5">
              <div class="row mb-5">
                <div class="col">
                  <h1 class="display-5 centro">
                    Confira alguns <b>Depoimentos!</b>
                  </h1>
                </div>
              </div>

              <div class="row mt-5 mb-5 pt-5">
                <div class="col-12 col-ms-12 col-lg-9 m-auto ">
                    

                    <div class="item-depoimentos">
                      <div class="row">
                        <div class="col-12 col-sm-4 col-lg-2 centro">
                            <img src="<?= BASE_IMG ?>extra/rogerio_gomes.png">
                        </div>
                        <div class="col-12 col-sm-10 col-lg-10 pt-3">
                          <p><strong class = "laranja">Rogerio Gomes</strong></p>
                          <p class="cinza-9">
                            Com a FatCred você tem a tranquilidade
                            de contratar alguns tipos de seguros no
                            conforto da sua casa, de forma rápida,
                            simples e sem burocracia.
                          </p>
                        </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>
          </section>

          <!-- === mensagem === -->
          <section id = "mensagem" class = "pt-5">
            <div class="bg"></div>
            <div class="container pt-5 mb-5">
              <div class="row pt-5 mt-5">
                <div class="col-12 col-sm-12 col-lg-12 centro branco negrito">
                  <h1 class="display-5">Envie uma <b>mensagem!</b></h1>
                </div>
              </div>


              <div class="row mt-5 mb-5 pt-4">
                <div class="col">
                    
                    <form id = "formularioHome">
                      <div class="row">
                        <div class="col">
                            
                            <div class="mb-3">
                              <input type="text" class="form-control" name = "nome" id="nome" placeholder="Seu nome completo">
                            </div>

                            <div class="mb-3">
                              <input type="email" class="form-control" name = "email" id="email" placeholder="Seu e-mail">
                            </div>

                            <div class="mb-3">
                              <input type="phone" class="form-control" name = "fone" id="fone" placeholder="Seu WhatsApp">
                            </div>

                        </div>

                        <div class="col">
                            
                            <div class="mb-3">
                              <textarea class="form-control" name = "msg" id="msg" placeholder="Escreva sua mensagem"></textarea>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="botao b-laranja botao-total negrito f-18 mb-3">Enviar meu contato</button>
                            </div>

                        </div>
                      </div>
                    </form>

                </div>
              </div>
            </div>
          </section>


      <!-- body - fim -->

  <!-- Footer -->
  <?php require "components/footer.php"; ?>

  <script src="<?= BASE_JS ?>jquery.min.js"></script>
  <script src="<?= BASE_JS ?>popper.min.js"></script>
  <script src="<?= BASE_JS ?>bootstrap.min.js"></script>
  <script>
    jQuery(function () {
      jQuery(window).scroll(function () {
        var height = $('header').outerHeight(true);
        if (jQuery(this).scrollTop() > 0) {
         $("#header-espaco").addClass("header-espaco");
         $("header").addClass("header-fixo");
        } else {
         $("#header-espaco").removeClass("header-espaco");
         $("header").removeClass("header-fixo");
        }
      });
    });
  </script>

</body>
</html>
