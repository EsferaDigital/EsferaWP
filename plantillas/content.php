<?php
printf('<main class="c-blog">');
	printf('<aside class="buscar">' . get_search_form(false) . '</aside>');
	printf('<section class="content-blog">');
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				$template_html = '
				<a href="%s">
					<article class="content-blog-item">
						<img class="content-blog-item-img" src="%s"/>
						<h2 class="content-blog-item-title">%s</h2>
						<p class="content-blog-item-extracto">%s</p>
						<p class="content-blog-item-date">%s</p>
					</article>
				</a>';
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
printf('</main>');