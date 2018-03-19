<?php
$sidebar = '<aside class="buscar">%s</aside>';
get_header();
printf($sidebar, get_search_form( false ));
get_template_part('/plantillas/content');
get_footer();