<?php
printf('<main class="item i-b w-70 main">');

	//Para personalizar el orden de la busqueda
	//query_posts('order=ASC');

	//Lógica de the_loop
	//Si (hay entradas)
		//mientras (hay entradas)
			//muestra la info de las entradas
	//Si no
		//no hay entradas publicadas o que coincidan con la búsqueda

	if( have_posts() ):
		while( have_posts() ):
			the_post();

			//printf('<p>Imprimiendo entrada</p>');
			$template_html = '
				<article class="post item">
					<h1>%s</h1>
					<div>%s</div>
					<a href="%s">%s</a>
					<p>%s - %s</p>
					<p>%s</p>
					<p>%s</p>
					<p class="post-categories">%s</p>
					<p>
						<a href="%s">%s</a>
					</p>
					<div class="the-content">%s</div>
				</article>
				<hr>
			';

			printf(
				$template_html,
				get_the_title(),
				//Recibe 3 parametros id del post, tamaño (medium, thumbnail, large) y un array para darle al atributo alt de la imagen, el nombre de la publicación.
				get_the_post_thumbnail($post_id, 'medium', array('alt' => get_the_title() ) ),
				get_the_permalink(),
				get_the_permalink(),
				get_the_date(),
				get_the_time(),
				get_the_excerpt(),
				//get_the_author(),
				//get_the_author_ID(),
				//get_author_posts_url(1),
				get_the_category_list(' - '),
				get_the_tag_list( '', ', ', ''),
				get_author_posts_url(get_the_author_ID()),
				get_the_author(),
				get_the_content()
			);
		endwhile;
	else:
		printf('<p class="error">No hay entradas</p>');
	endif;
	rewind_posts();
printf('</main>');