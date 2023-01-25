
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
