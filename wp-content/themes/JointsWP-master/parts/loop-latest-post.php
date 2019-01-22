<?php
	$CurrentPage = get_query_var("paged");

	$latestPosts_args = array (
		"posts_per_page" => 6,
		"paged" => $CurrentPage,
		"orderby" => "date",
		"order"   => "DESC",
		"ignore_sticky_posts" => 1,
	);

	$latestPosts = new WP_Query($latestPosts_args);
?>
<h5 class="titleliner">LATEST POSTS</h5>
<div class="inner-content grid-x grid-padding-x grid-container ">
	
	<div class="grid-x grid-padding-x cell large-8">
		<?php  while( $latestPosts->have_posts()): $latestPosts->the_post(); ?>
			<div class="latest-posts cell small-6 medium-6 large-6">
				<?php if ( has_post_thumbnail()) : ?>
				<a class="img-latest-post" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail("medium"); ?></a>
				<h2 class="category-latest-post"><?php the_category(); ?></h2>
				<h3 class="title-latest-post"><a class= "title-latest-post" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
				<?php the_excerpt() ?>
				<?php endif ?>
			</div>
			
		<?php endwhile; ?>
	</div>
	<div class="pagination-latest-post cell large-8">
		<?php 
			echo paginate_links(array(
					"total" => $latestPosts->max_num_pages,
					"prev_text" => __("<", "textdomain"),
					"next_text" => __(">", "textdomain"),
					));
		?>
	</div>
			
</div>
	

