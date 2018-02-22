<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<!-- importando o view port do site do bootstrap para estilizar no dispositivo mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--utilizando a tag bloginfo para obter o titulo do site-->
	<title><? bloginfo('name'); echo " | "; bloginfo('description');?></title> 
	<!--linkando o geral.css |  Utilizando o template_url para acessar os arquivos da raiz do site na pasta Wordpress-->
	<link rel="stylesheet" href="<?bloginfo('template_url')?>/css/geral.css">
	<!-- linkando o wow js e animate.css-->
	<link rel="stylesheet" type="text/css" href="<?bloginfo('template_url')?>/bower_components/wow/css/libs/animate.css">
	<!-- Linkando o plugins.css-->
	<link rel="stylesheet" href="<?bloginfo('template_url')?>/css/plugins.css">
	<link rel="stylesheet" href="<?bloginfo('template_url')?>/css/<? echo $style ?>.css">

</head>

<body>

		<style>
			<?if (get_the_post_thumbnail()):?>
				header {
					background-image: url('<? the_post_thumbnail_url(); ?>');
				}		
			<?else : ?>
				header {
					background-image: url('<? bloginfo('template_url');?>/images/slide_index-1.jpg');
				}	
			<?endif; ?>	

		</style>


	<header>
		<!--Classe do logo e um link da pagina index-->
		<div class="container">
			<div class="logo wow swing" data-wow-duration="1.7s" data-wow-delay="0.7s">
				<a href="http://localhost/wordpress/inicio/">
					<img src="<?bloginfo('template_url')?>/images/Logo.svg" alt="Logo topo C">
				</a>
			</div>
			

			<div class="links">
				<!--Menu bar di Site-->
				<? include('includes/organisms/menu.php') ?>
								
				<!--Icones de Rede Social utilizando o link do Font Awesome<-->
				<ul class="social">
					<li class="wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
						<a href="#"><i class="fab fa-github-alt "></i></a>
					</li>
					<li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.9s">
						<a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="0.7s">
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</li>
				

					<a class="toogle" href="javascript:;">
							<span></span>
							<span></span>
							<span></span>
					</a>

				</ul>
			</div>
			
			<!--Chama do Topo do Site-->
			<h1> <? echo $chamada ?> </h1>

			<p>Code // Share // Reboot</p>

		</div>

	</header>


	<? include('includes/organisms/menu-responsivo.php') ?>

	<main class="layout">