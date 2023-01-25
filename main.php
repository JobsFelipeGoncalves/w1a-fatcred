<?php

	include('url_response.php');

	$urlpatterns = array(

		'/trabalhe-conosco' => 'trabalhe-conosco.php',

		'/?(?P<ads>\S+)' => 'index.php',
		'/' => 'index.php',		

		'/404' => '404.php'

	);

	url_response($urlpatterns);
?>
