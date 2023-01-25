<?php

	include('url_response.php');

	$urlpatterns = array(

		'/sobre-mim' => 'sobre.php',

		'/minhas-solucoes' => 'sobre.php',

		'/projetos' => 'sobre.php',

		'/projetos/(?P<pages>\S+)' => 'sobre.php',

		'/projetos/(?P<projetos_desc>\S+)' => 'sobre.php',

		'/fale-comigo' => 'sobre.php',

		'/solicite-sua-proposta' => 'sobre.php',

		'/contato-enviado' => 'sobre.php',

		'/?(?P<ads>\S+)' => 'index.php',
		'/' => 'index.php',		

		'/404' => '404.php'

	);

	url_response($urlpatterns);
?>
