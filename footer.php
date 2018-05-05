	<footer class="c-footer">
		<section class="c-footer-item">
			<aside class="c-footer-aside">
				<h4 class="c-footer-aside-title">Esfera Digital</h4>
				<p>Somos una Agencia Digital joven y dinámica. Nuestra propuesta es la entrega de un servicio cuidado, que acerque el desarrollo tecnológico a las personas, comunicando lo que hacemos y las posibilidaes que hoy ofrece la tecnología, en un lenguaje sencillo. Entendemos que cada cliente es único y trabajamos por crear una identidad digital que refleje dicha unicidad.
				</p>
			</aside>
			<aside class="c-footer-aside">
				<h4 class="c-footer-aside-title">Síguenos</h4>
				<section class="social">
					<a class="social-icon icon-facebook" href="https://www.facebook.com/miesferadigital/" target="_blank">
					</a>
					<a class="social-icon icon-youtube" href="https://www.youtube.com/channel/UC8A9wLh4P7l-etbjnDwbcMQ?view_as=subscriber" target="_blank">
					</a>
					<a class="social-icon icon-linkedin" href="https://www.linkedin.com/in/gabrielzavando/" target="_blank">
					</a>
					<a class="social-icon icon-github" href="https://github.com/EsferaDigital" target="_blank">
					</a>
				</section>
			</aside>
			<aside class="c-footer-aside">
				<h4 class="c-footer-aside-title">Blog</h4>
				<?php
				printf('<section class="footer-blog">');
				dynamic_sidebar(2);
				printf('</section>');
				?>
			</aside>
			<aside class="copyright">
				<p class="icon-copyright copyright-item">Copyright Esfera Digital 2017-2018
				</p>
				<p class="copyright-item">Diseñado por Esfera Digital
				</p>
    		</aside>
  		</section>
	</footer>
	<?php wp_footer(); ?>
</body>
