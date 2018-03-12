<?php
printf('<aside class="item i-b w-30 aside">');
	get_search_form(true);
	//dynamic_sidebar('sidebar'); puede ser invocada por su nombre de id
	dynamic_sidebar(1);
	dynamic_sidebar(2);
printf('</aside>');