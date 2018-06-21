<style>
.main-header{
	background-color: #1e2838;
}

#logoContainer{
	justify-content: flex-start;
}

#logoText{
	transform: translate(0, 0);
}

</style>
<?php
get_header();
printf('
	<div class="cajaerror"</div>
	<div class="buscar">' . get_search_form(false) . '</div>
	<section class="error">
		<h1 class="error-title">Error</h1>
		<p class="error-subtitle">Página no encontrada</p>
		<div class="error-main">
			<p>4</p>
			<img src="https://esferadigital.cl/wp-content/uploads/2018/05/logo.png"></img>
			<p>4</p>
		</div>
		<div class="error-text">
			<p>¡Oops! Lo sentimos, esta página no la hemos encontrado</p>
			<p>Puedes volver al menú principal o ir a la caja de búsqueda.</p>
		</div>
	</section>
');
get_footer();