<?php
//El archivo functions.php es como una biblioteca personal de funciones, es una manera facil de agregar o modificar el comportamiento por defecto de WP. Se comporta exactamente igual que un plugin, añadiendo caracteristicas y funcionalidades a un tema, y se puede utilizar tanto para definir nuevas funciones PHP como para modificar las que ya incorpora WP. 


function custom_theme_setup(){
	//Para mostrar la imagen principal de las entradas del blog
	add_theme_support( 'post-thumbnails' );

	//Para añadir la opción de Menús en nuestra interfaz gráfica.
	$locations = array(
		'menu_principal' => 'Menú Principal',
		'menu_social' => 'Menú Social Media'
	);

	register_nav_menus($locations);

}

//Una vez que se carga el tema, ejecutamos la función creada con el nombre custom_theme_setup
add_action('after_setup_theme', 'custom_theme_setup');

//Para añadir el filtro que permita mejorar el "leer más" de las entradas en el Blog.

function read_more(){
	$url_post = get_permalink();
	return "&nbsp;<a href='$url_post'><small>Leer más...</small></a>";
}

add_filter('excerpt_more', 'read_more');

//Hook para activar los widgets

function widgets_activation(){
	$args = array(
		//'name' => __('Sidebar %d'),
		//'id' => 'sidebar',
		//'description' => 'Aparece en la interface',
		//'class' => 'widgets',
		'before_widget' => '<div class="item widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	);
	register_sidebars(3, $args);
}

add_action('widgets_init', 'widgets_activation');