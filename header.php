<?php
printf('
<!DOCTYPE html>
<html lang="' . get_bloginfo('language') . '">
<head>
	<title>' . get_bloginfo('name') . '</title>
	<meta charset="' . get_bloginfo('charset') . '" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" content="' . get_bloginfo('description') . '" />
	<link rel="icon" type="image/x-icon" href="' . get_bloginfo('template_url') . '/img/favicon.ico"/>
	<link href="https://file.myfontastic.com/GnBSrTdwpTsCBFa78WxP3W/icons.css" rel="stylesheet" />
	<link rel="stylesheet" href="' . get_bloginfo('stylesheet_url') . '" />
');
	wp_head();
	//Si se muestra la barra de wordpress
	if( is_admin_bar_showing()){
		printf('
			<style>
				.main-header{
					top: 2.7rem;
				}
			</style>
		');
	}

printf('
</head>
<body>
	<header class="main-header">
		<h1 class="logo-container">
			<a href="' .get_bloginfo() . '">Esfera Digital</a>
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