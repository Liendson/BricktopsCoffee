<!DOCTYPE html>
<html lang="pt-br">

  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Liendson Douglas">

		<title><?php is_home() || is_front_page() ? bloginfo("name") : wp_title('', true, 'right') ?></title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/dist/imagens/favicon-32x32.png">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

		<!-- CSS Customizado -->
		<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
		
		<!-- Bibliotecas de CSS -->
		<link href="<?php bloginfo('template_url'); ?>/dist/css/style.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/css/style.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/animate/animate.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/dist/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

		<?php wp_head(); ?>
  </head>

  <body>

		<div class="bricktops-barra-superior hidden-xs">
			<h4 class="text-center">FREE SHIPPING ON ALL ORDERS OVER $50 Due to high volumes, orders may result in shipping delays.<h4>
		</div>

		<header class="bricktops-header">
			<div class="logo text-center">
				<h1 class="text-light">
					<a href="<?php bloginfo('url') ?>">
						<img class="bricktops-logo" src="<?php bloginfo('template_url'); ?>/dist/imagens/logo-bricktops.png">
					</a>
				</h1>
			</div>

			<nav class="menu">
				<ol>
					<li class="menu-item">
						<a href="#0">CAFÉS</a>
						<ol class="sub-menu">
							<li class="menu-item border-top"><a href="#0">Big Widgets</a></li>
							<li class="menu-item"><a href="#0">Bigger Widgets</a></li>
							<li class="menu-item"><a href="#0">Huge Widgets</a></li>
						</ol>
					</li>
					<li class="menu-item">
						<a href="#0">ASSINATURAS</a>
						<ol class="sub-menu">
							<li class="menu-item border-top"><a href="#0">Big Widgets</a></li>
							<li class="menu-item"><a href="#0">Bigger Widgets</a></li>
							<li class="menu-item"><a href="#0">Huge Widgets</a></li>
						</ol>
					</li>
					<li class="menu-item">
						<a href="#0">SOUVENIRS</a>
						<ol class="sub-menu">
							<li class="menu-item border-top"><a href="#0">Big Widgets</a></li>
							<li class="menu-item"><a href="#0">Bigger Widgets</a></li>
							<li class="menu-item"><a href="#0">Huge Widgets</a></li>
						</ol>
					</li>
					<li class="menu-item">
						<a href="#0">DESCUBRA</a>
						<ol class="sub-menu">
							<li class="menu-item border-top"><a href="#0">Shishkabobs</a></li>
							<li class="menu-item"><a href="#0">BBQ kabobs</a></li>
							<li class="menu-item"><a href="#0">Summer kabobs</a></li>
						</ol>
					</li>
					<li class="menu-item">
						<a href="#0">ATACADO</a>
						<ol class="sub-menu">
							<li class="menu-item border-top"><a href="#0">Big Widgets</a></li>
							<li class="menu-item"><a href="#0">Bigger Widgets</a></li>
							<li class="menu-item"><a href="#0">Huge Widgets</a></li>
						</ol>
					</li>
					<li class="menu-item">
						<a href="#0">LOCALIZAÇÕES</a>
						<ol class="sub-menu">
							<li class="menu-item border-top"><a href="#0">Big Widgets</a></li>
							<li class="menu-item"><a href="#0">Bigger Widgets</a></li>
							<li class="menu-item"><a href="#0">Huge Widgets</a></li>
						</ol>
					</li>
				</ol>
			</nav>
		</header>
