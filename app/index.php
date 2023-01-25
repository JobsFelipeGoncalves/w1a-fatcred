
<!doctype html>
<html lang="pt-br">
<head>

  <title>Felipe Gonçalves - Desenvolvedor Web, Design Gráfico e Marketing</title>
  <meta charset="UTF-8">
  <meta name="viewport"              content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="description"           content="Sistema de Saúde com o melhor custo-benefício. Consultas, Telemedicina, exames e beneficiários assistênciais."/>
  <meta name="keywords"              content="prover, prover sáude, sistema de saúde, saúde, beneficios, vantagens, assistencia à saúde, assistência completa, convênio, convênio de saúde, plano de saúde, planos, plano familiar, plano individual, Telemedicina, assistencia pós-vida, seguro de vida, funeral, coberturas, exames, consultas, especialialistas médicas, ivinhema, campo grande, aquidauana, nova andradina, navirai, bonito, ponta porã, dourados, index, MS, mato grosso do sul"/>
  <meta name="robots"                content="index, follow" />
  <meta name="author"              content="Marketing Grupo Prover / dev: Felipe Gonçalves - jobs.felipegoncalves@gmail.com"/>


  <meta property="og:locale"       content="pt_BR">
  <meta property="og:site_name"    content="Sistema Prover Saúde">
  <meta property="og:url"          content="<?= BASE ?>" />
  <meta property="og:type"         content="website" />
  <meta property="og:title"        content="Sistema Prover Saúde - A proteção e prevenção para você, sua família e empresa." />
  <meta property="og:description"  content="Sistema de Saúde com o melhor custo-benefício. Consultas, Telemedicina, exames e beneficiários assistênciais." />
  <meta property="og:image"        content="<?= BASE_IMG ?>marcas/sistema_prover_saude.png" />


  <link rel="canonical" href="<?= BASE ?>">
  <link rel="icon" href="<?= BASE_IMG ?>marcas/logo_icon.png">

  <link rel="stylesheet" href="<?= BASE_CSS ?>fg.min.css">
  <link rel="stylesheet" href="<?= BASE_CSS ?>bootstrap.min.css">
  <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
  <!--   <link rel="stylesheet" href="<?= BASE_CSS ?>estilo.responsivo.min.css"> -->




</head>
<body id = "pagina-inicial">

  <!-- Header -->
  <?php require "components/header.php"; ?>

      <!-- body -->
          <!-- === Apresentação === -->
          
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
