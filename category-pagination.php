/*
	Add the following code inside a loop
	It will look for posts in the same category and show them accordingly

	used for: FM - product-review (single.php) and single.php of DBKV blog
/**/


<?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>
					
	<div class="paginationwrapper">
		<div class="alignleft pagination"><?php previous_post_link('%link','« Vorige review in '. $post_categories->cat_name.'', true); ?></div>
		<div class="alignright pagination"><?php next_post_link('%link','Volgende review in '. $post_categories->cat_name .' »', true); ?></div>
	</div>

<?php endwhile; endif; ?>