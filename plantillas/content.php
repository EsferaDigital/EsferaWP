<?php
printf('<section class="c-blog">
	<section class="content-blog">');
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				$template_html = '
					<article class="content-blog-item">
						<a href="%s" class="content-blog-figure">
							<img class="content-blog-figure-img" src="%s"/>
							<h2 class="content-blog-figure-title">%s</h2>
						</a>
						<p class="content-blog-item-extracto">%s</p>
						<p class="content-blog-item-date">%s</p>
					</article>';
				printf(
					$template_html,
					get_permalink(),
					url_imagen_destacada('thumbnail'),
					get_the_title(),
					get_the_excerpt(),
					get_the_date()
				);
					
			endwhile;
		else:
			printf('<style>.content-blog{
					display: flex;
					width: 100%;
					height: 80vh;
				}</style>');
				printf('<p class="c-empty">No hay coincidencias con tu búsqueda</p>');
		endif;
			rewind_posts();
		printf('</section>');
			printf('<div class="paginacion">');
				wp_pagenavi();
			printf('</div>');
printf('</section>');