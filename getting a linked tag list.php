/*
	Add the following code inside a loop
	It will find posts in myCat with the same tag as the current post. It will then make a comma separated list of linked titles.

	used for: FM - product-review (single.php)
/**/


<?php

	$myTag = strip_tags(get_the_tag_list('',',',''));
	query_posts(array(
	'category_name' => 'myCat',
	'numberposts' => -1,
	'tag' => $myTag
));
$first = NULL;
while (have_posts()) { the_post(); ?>

	<?= ($first ? ', ' : $first = 'blaat') ?>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Ga naar <?php the_title_attribute(); ?>">
		<?php the_title(); ?>
	</a>

<?php } wp_reset_query(); ?>