<?php
get_header();
printf('
	<h1 class="item title-template">
		El archivo page.php es el archivo que toma por defecto wp para mostrar una página estática.
	</h1>
');
get_template_part('content');
get_sidebar();
get_footer();