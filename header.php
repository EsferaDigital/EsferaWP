<?php
printf('
<!DOCTYPE html>
<html lang="' . get_bloginfo('language') . '">
<head>
	<title>' . get_bloginfo('name') . '</title>
	<meta charset="' . get_bloginfo('charset') . '" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" content="' . get_bloginfo('description') . '" />
	<link rel="icon" type="image/x-icon" href="' . get_bloginfo('template_url') . '/img/favicon.png"/>
	<link rel="stylesheet" href="http://localhost:8080/esferadigital/wp-content/themes/esferagulp/fonts.css" />
	<link rel="stylesheet" href="' . get_bloginfo('stylesheet_url') . '" />
');
	wp_head();
	//<link rel="stylesheet" href="https://esferadigital.cl/wp-content/themes/esferagulp/fonts.css" />" /> para cuando esté ofline
	//Si se muestra la barra de wordpress
	if( is_admin_bar_showing()){
		printf('
			<style>
				.main-header{
					top: 1rem;
				}
			</style>
		');
	}

printf('
</head>
<body>
	<header id="mainHeader" class="main-header slide-top">
		<h1 id="logoContainer" class="logo-container">
			<a id="logoText" class="logo-container-text" href="https://esferadigital.cl">Esfera Digital</a>
		</h1>
		<i class="icon-menu" id="toggle-menu"></i>
');
		$args = array(
			'theme_location' => 'menu_principal',
			'container' => 'nav',
			'container_class' => 'container-nav',
			'container_id' => 'main-nav'
		);
		wp_nav_menu($args);
printf('
	</header>
');	