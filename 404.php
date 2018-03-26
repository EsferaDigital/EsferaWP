<?php
get_header();
printf('
	<section class="error">
		<div class="buscar">' . get_search_form(false) . '</div>
		<h1 class="error-title">Error</h1>
		<p class="error-subtitle">Página no encontrada</p>
		<div class="error-main">
			<p>4</p>
			<img src="http://localhost:8080/esferadigital/wp-content/uploads/2018/03/logo.png"></img>
			<p>4</p>
		</div>
		<div class="error-text">
			<p>¡Oops! Lo sentimos, esta página no la hemos encontrado</p>
			<p>Puedes volver al menú principal o ir a la caja de búsqueda.</p>
		</div>
	</section>
');
get_footer();