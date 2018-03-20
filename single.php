<?php
get_header();
printf('
	<h1 class="item title-template">
		El archivo single.php es el archivo que toma por defecto wp para mostrar una entrada (un post).
	</h1>
');
get_template_part('/plantillas/content-posts');
get_sidebar();
get_footer();