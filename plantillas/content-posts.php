<?php
printf('<main class="post">');
	if( have_posts() ):
		while( have_posts() ):
			the_post();
			$template_html = '
				<article class="post-item">
					<h1 class="post-title">%s</h1>
					<div class="post-img">%s</div>
					<p class="post-content">%s</p>
					<p class="post-autor">%s</p>
					<p class="post-date">%s - %s</p>
					<p class="post-categories">%s</p>
					<p class="post-tag>%s</p>
				</article>
			';

			printf(
				$template_html,
				get_the_title(),
				//Recibe 3 parametros id del post, tamaño (medium, thumbnail, large) y un array para darle al atributo alt de la imagen, el nombre de la publicación.
				get_the_post_thumbnail($post_id, 'full', array('alt' => get_the_title() ) ),
				get_the_content(),
				get_the_author(),
				get_the_date(),
				get_the_time(),
				get_the_category_list(' - '),
				get_the_tag_list( '', ', ', '')		
			);
		endwhile;
	else:
		printf('<p class="error">No hay entradas</p>');
	endif;
	rewind_posts();
printf('</main>');