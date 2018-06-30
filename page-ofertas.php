<style>
.main-header{
	background-color: #1e2838;
}

#logoContainer{
	justify-content: flex-start;
}

#logoText{
	transform: translate(0, 0);
}

.contenido-principal, .c-footer{
	position: relative;
	top: 9%;
}
</style>
<?php
/*
Template name: Plantilla para Ofertas
 */
get_header();
printf('<main class="contenido-principal">');
	get_template_part('/plantillas/ofertas');
printf('</main>');
get_footer();