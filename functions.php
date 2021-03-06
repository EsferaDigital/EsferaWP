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
	$sidemain = array(
		'name' => __('Barra Lateral 1'),
		'id' => 'sidebar',
		'class' => 'widgets',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	);
	// $sidefooter = array(
	// 	'name' => __('Barra Lateral 2'),
	// 	'id' = 'side-footer',
	// 	'class' = 'widgets',
	// 	'before_widget' => '<div>',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h2>',
	// 	'after_title' => '</h2>'
	// );
	register_sidebar($sidemain);
	register_sidebar();
}

add_action('widgets_init', 'widgets_activation');

// JS Personalizado

function insertar_js(){
	$scriptSrc = get_template_directory_uri() . '/js/all.min.js';
	wp_enqueue_script( 'personal', $scriptSrc , array(), '1.0',  true );
}

add_action( 'wp_enqueue_scripts', 'insertar_js' );

//Para obtener la url de las imagenes destacadas de nuestras entradas
function url_imagen_destacada($size){

	//Variable global de wordpress
	global $post;
	$imagen_id = get_post_thumbnail_id( $post->ID );
	$imagen_destacada = wp_get_attachment_image_src( $imagen_id, $size);
	// 0 = ruta, 1 = anchura, 2 = altura, 3 = boolean
	//sprintf devuelve el resultado como string
	return $imagen_destacada[0];
}

require get_parent_theme_file_path('/inc/formulario.php');