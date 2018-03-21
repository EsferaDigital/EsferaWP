<?php
printf('<main class="blog-container">');
	printf('<aside class="buscar">' . get_search_form(false) . '</aside>');
		printf('<section class="blog-grid-container">');
			if( have_posts() ):
				while( have_posts() ):
					the_post();
					$template_html = '
						<aside class="blog-grid-item">
							<a href="%s">
								<img class="blog-img" src="%s">
								<figcapion class="blog-title">%s</figcaption>
								<p>%s</p>
								<p>%s</p>
							</a>
						</aside>
					';

					printf(
						$template_html,
						get_permalink(),
						url_imagen_destacada('medium'),
						get_the_title(),
						get_the_excerpt(),
						get_the_date()
					);
					
				endwhile;
			else:
				printf('<p class="error">No hay entradas</p>');
			endif;
			rewind_posts();
		printf('</section>');
	printf('<div class="paginacion">');
		wp_pagenavi();
	printf('</div>');
printf('</main>');