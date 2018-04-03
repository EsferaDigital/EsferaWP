<?php
get_header();
$search_template = '<p class="item">
		Los resultados para la busqueda <mark>%s</mark> son:
	</p>
';
printf($search_template, get_search_query() );
get_template_part('/plantillas/content');
get_footer();