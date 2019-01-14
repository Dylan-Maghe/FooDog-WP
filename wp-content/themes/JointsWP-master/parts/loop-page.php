<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->











<?php
	$recentPosts = new WP_Query();
	
	$sticky = get_option(‘sticky_posts’);
	
	$args = array(
	
	'offset' => 1,

	'post_per_page' => 3,
	
	'post__in' => $sticky,
	
	'ignore_sticky_posts' => 1,
	
	'orderby' => 'date',
	
	);
	
	$recentPosts->query($args);

	while ($recentPosts->have_posts()) : $recentPosts->the_post();
	
	?>

	<div>
	
	<?php if ( has_post_thumbnail()) : ?>
	
	<h3><a href= »<?php the_permalink(); ?> » title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
	
	<a href= »<?php the_permalink(); ?> » title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail(‘large’); ?></a>
	

	
	<?php endif; ?>
	
	</div>
	
	<?php endwhile; ?>
