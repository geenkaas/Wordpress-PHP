/*
	Add the following code inside a loop
	It will look for posts in the same category and show them accordingly

	used for: FM - product-review (single.php) and single.php of DBKV blog
/**/


						<?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="alignleft pag-but"><?php previous_post_link('%link','« Vorige post'); ?></div>
							<div class="alignright pag-but"><?php next_post_link('%link','Volgende post »'); ?></div>
						<?php endwhile; endif; ?>