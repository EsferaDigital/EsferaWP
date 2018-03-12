	</section>
	<footer class="container footer">
		<?php
			$args = array(
				'theme_location' => 'menu_social',
				'container' => 'nav',
				'container_class' => 'item nav'
			);
			
			wp_nav_menu($args);
		?>
	</footer>
	<?php wp_footer(); ?>
</body>
</html> 