<!DOCTYPE html>
<html lang="pt-br">

  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Redes de proteção, Redes de proteção para quadras e área externa, Redes para animais, redes para janelas, Cortinas, persianas, box, banheiro, rede de proteção, redes de proteção, rede de proteção para janelas, tela e rede de proteção para sacada, rede proteção, redes proteção, redes para piscina, rede de proteção para piscina, tela de proteção, telas de proteção, tela de proteção para quadra, João Pessoa, Campina Grande, Patos, Areia, Ingá, Cajazeiras, tela protecao, tela de protecao, redes e telas de proteção, rede para proteção, redes para proteção, rede para protecao, redes para protecao, rede de segurança, redes de segurança, rede de segurança para janela, rede de segurança para janelas e sacadas, tela de segurança, rede de proteção para apartamento, telas para quadra esportiva, redes de proteção para apartamento, telas de segurança, tela contra pombo, telas contra pombos, redes e telas de proteção, tela e rede de proteção, rede para gato, redes para gatos, telas de proteção para gatos, telas para gatos">
		<meta name="description" content="Empresa especializada em Redes de Proteção em João Pessoa e outras cidades - Proteção para Crianças, Animais, Quadras, Piscinas, Brinquedos, Janelas e Sacadas. Trabalhamos também com cortinas, persianas, box para banheiros, espelhos, telas mosquiteiro, etc">
		<meta name="author" content="Liendson Douglas">

		<title><?php is_home() || is_front_page() ? bloginfo("name") : wp_title('', true, 'right') ?></title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/dist/imagens/favicon-32x32.png">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">

		<!-- CSS Customizado -->
		<link href="<?php bloginfo('template_url'); ?>/dist/css/style.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/css/style.css" rel="stylesheet">

		<!-- Bibliotecas de CSS -->
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/animate/animate.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

		<?php wp_head(); ?>
  </head>

  <body>

		<header id="header">
			<!-- <div class="container">
				<div class="row">
					<div class="navbar-header col-sm-12">

						<div id="topbar">
							<div class="container">
								<div class="social-links">
								<a href="https://instagram.com/redetexambientacoes/" class="instagram"><i class="fa fa-instagram"></i></a>
								<a href="#" class="instagram"><i class="fa fa-whatsapp"></i></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div> -->

			<div class="container">
				<div class="logo float-left">
					<h1 class="text-light">
						<img src="<?php bloginfo('template_url'); ?>/dist/imagens/LOGO-REDETEX.png" alt="">
						<a href="<?php get_permalink(); ?>/redetex" class="scrollto"><span><?php bloginfo("name") ?></span></a>
					</h1>
				</div>

				<nav class="main-nav float-right d-none d-lg-block">
					<?php add_menu_principal() ?>
				</nav>

			</div>
		</header>
