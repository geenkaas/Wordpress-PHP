/*
	Add the following code inside a loop
	It will get the tags from the current post, look for matching tags in a specified category.
	Grabs the content of that posts and places it in the current post.
	Resets the old loop

	used for: Getting reviewer image in FM - product-review (single.php)
/**/

<?php
	$posttag = strip_tags(get_the_tag_list('',',',''));
	$targetcat = 'myCat';

	 query_posts(array(
		'category_name' => $targetcat,
		'numberposts' => -1,
		'tag' => $reviewertag
	));

	while (have_posts()) { the_post(); ?>

		<div class="myCat">
			<?php the_title(); ?>
			<?php the_content(); ?>
			<?php the_post_thumbnail('full', array('class' => 'myCat'));?>
		</div>

<?php } wp_reset_query(); ?>