<?php
printf('<main class="blog-container">');


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
				<a href="%s">
					<figure class="post item">
						<img src="%s">
						<figcapion>%s</figcaption>
					</figure>
				</a>
			';

			printf(
				$template_html,
				get_permalink(),
				//Recibe como parametro el tamaño de la imagen que queramos mostrar
				url_imagen_destacada('medium'),
				get_the_title()
			);
			
		endwhile;
	else:
		printf('<p class="error">No hay entradas</p>');
	endif;
	rewind_posts();
printf('</main>');