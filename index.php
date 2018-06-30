<?php
get_header();
get_template_part('/plantillas/banner-blog');
printf('<main class="contenido-principal">');
	get_template_part('/plantillas/content');
	get_sidebar();
printf('</main>');
get_footer();