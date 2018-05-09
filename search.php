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
$search_template = '<p class="c-search">
		Los resultados para la busqueda <span>"%s"</span> son:
	</p>
';
printf($search_template, get_search_query() );
get_template_part('/plantillas/content');
get_footer();