<?php
printf('
<!DOCTYPE html>
<html lang="' . get_bloginfo('language') . '">
<head>
	<title>' . get_bloginfo('name') . '</title>
	<meta charset="' . get_bloginfo('charset') . '">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="' . get_bloginfo('description') . '">
	<link rel="stylesheet" href="' . get_bloginfo('stylesheet_url') . '">
');
	wp_head();
printf('
</head>
<body>
	<header id="header" class="container header">
		<h1 class="item i-b w-30 logo">Logo</h1>
');
		$args = array(
			'theme_location' => 'menu_principal',
			'container' => 'nav',
			'container_class' => 'item i-b w-70 nav'
		);
		wp_nav_menu($args);
printf('
	</header>
	<section class="container">
');	