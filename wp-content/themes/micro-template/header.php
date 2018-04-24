<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title); ?></title>
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
</head>
<body>
	<nav class="navbar">
		<ul>
			<li class="navbar__left"></li>
			<li><a href="<?php bloginfo('url')?>/conocenos/?>">Conócenos</a></li>
			<li><a href="<?php bloginfo('url')?>/microcuentos/?>">Microcuentos</a></li>
			<li><a href="<?php bloginfo('url')?>/galeria/?>">Galería</a></li>
			<li><a href="<?php bloginfo('url')?>/noticias/?>">Noticias</a></li>
			<li><a href="<?php bloginfo('url')?>/contactanos/?>">Contáctanos</a></li>
		</ul>
	</nav>
	<a href="<?php echo get_bloginfo('url')?>"><img class="navbar__img" src="<?php echo get_bloginfo('template_directory')?>/img/logo.png"></a>