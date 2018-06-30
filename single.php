<?php
get_header();
get_template_part('/plantillas/banner-blog');
get_template_part('/plantillas/content-posts');
get_sidebar();
comments_template();
get_footer();