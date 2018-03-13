<?php
$template_author = '
	<ul class="item author-info">
		<li>Autor: <b>%s</b></li>
		<li>ID Autor: <b>%s</b></li>
		<li>Correo: <b>%s</b></li>
		<li>Login: <b>%s</b></li>
		<li>Password: <b>%s</b></li>
		<li>Alias: <b>%s</b></li>
		<li>URL Autor: <b>%s</b></li>
		<li>URL Página Autor: <b>%s</b></li>
		<li>Fecha y hora de Registro: <b>%s</b></li>
		<li>Rol: <b>%s</b></li>
		<li>Clave de activación: <b>%s</b></li>
		<li>Status: <b>%s</b></li>
		<li>Nombre público: <b>%s</b></li>
		<li>Nick: <b>%s</b></li>
		<li>Nombre: <b>%s</b></li>
		<li>Apellido: <b>%s</b></li>
		<li>Descripción: <b>%s</b></li>
		<li>Número de publicaciones: <b>%s</b></li>
		<li>Avatar: %s</li>
	</ul>
';
get_header();
printf('
	<h1 class="item title-template">
		El archivo author.php es el archivo que toma por defecto wp para mostrar la página de perfil del autor (usuario) actual.
	</h1>
	<article class="item"></article>
');
printf(
	$template_author,
	get_the_author(),
	get_the_author_ID(),
	get_the_author_meta('user_email'),
	get_the_author_meta('user_login'),
	get_the_author_meta('user_pass'),
	get_the_author_meta('user_nicename'),
	get_the_author_meta('user_url'),
	get_author_posts_url(get_the_author_ID()),
	get_the_author_meta('user_registered'),
	get_the_author_meta('roles')[0],
	get_the_author_meta('user_activation_key'),
	get_the_author_meta('user_status'),
	get_the_author_meta('display_name'),
	get_the_author_meta('nickname'),
	get_the_author_meta('first_name'),
	get_the_author_meta('last_name'),
	get_the_author_meta('description'),
	get_the_author_posts(),
	get_avatar(get_the_author_ID(), 100)
);
//Hay que modificar la plantilla que muestra este archivo
get_template_part('/plantillas/banner');
get_sidebar();
get_footer();