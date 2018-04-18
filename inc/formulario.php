<?php

/**
 * Funcion que captura los valores de una 
 * petición POST o GET de HTTP.
 */
function captura_valores_form(){
	
	// Verificar campos obligatorios y válidos

	if( empty( $_POST['txtnombre'] ) || empty( $_POST['txtnombre'] ) ):
		// Enviamos al usuario a la misma página con una variable GET de error.
		wp_redirect( add_query_arg( array( 'errormsg' => "Campos incompletos" ), get_home_url() . '/contacto') ); exit;

	endif;


	//Sanitizar los valores (para evitar sql malicioso)

	$nombre     = sanitize_text_field( $_POST['txtnombre'] );
	$email     = sanitize_text_field( $_POST['email'] );
	$mensaje    = sanitize_text_field( $_POST['txtmensaje'] );

	//Enviar un email

	wp_mail( "gabrielzavando@gmail.com", "Formulario de contacto", $nombre . " envió este mensaje => " . $mensaje . " desde " . $email );

	//Redireccionamos con mensaje de exito
	wp_redirect( add_query_arg( array( 'exito' => "1" ), get_home_url() . '/contacto') ); exit;
	
}
add_action('admin_post_nopriv_contactform', 'captura_valores_form'); // Para usuarios no logueados
//add_action('admin_post_contactform', 'captura_valores_form'); // Para usuarios logueados