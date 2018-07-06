<style>
.main-header{
	background-color: #1e2838;
	box-shadow: 7px 7px 12px rgba(0, 0, 0, 0.575);
}

#logoContainer{
	justify-content: flex-start;
}

#logoText{
	transform: translate(0, 0);
}

.contenido-principal, .c-footer{
	position: relative;
	top: 10%;
}

@media screen and (min-width: 411px){
	.contenido-principal, .c-footer{
		top: 8%;
	}
}

@media screen and (min-width: 480px){
	.contenido-principal, .c-footer{
		top: 7%;
	}
}

@media screen and (min-width: 600px){
	.contenido-principal, .c-footer{
		top: 5.5%;
	}
}

@media screen and (min-width: 1024px){
	.contenido-principal, .c-footer{
		top: 4%;
	}
}
</style>

<?php
get_header();
printf('<main class="contenido-principal">');
	$search_template = '<p class="c-search">
			Los resultados para la busqueda <span>"%s"</span> son:
		</p>
	';
	printf($search_template, get_search_query() );
	get_template_part('/plantillas/content');
	get_sidebar();
printf('</main>');
get_footer();