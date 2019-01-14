<?php
	
	$popular_posts_args = array(
	'meta_key' => 'my_post_viewed',
 	'orderby' => 'meta_value_num',
 	'order'=> 'DESC'
	);
 
	$popular_posts_loop = new WP_Query( $popular_posts_args );	
	
	?>			
	<div class="content">
	
		<div class="inner-content grid-x grid-padding-x grid-container ">
		    
			<div class="jumbotron grid-x grid-padding-x cell large-12 ">
			<?php $i = 0; while( $popular_posts_loop->have_posts() && $i < 1 ): $popular_posts_loop->the_post(); ?>
				<div class="jumbotron-left cell small-12 medium-6 large-6">
					<?php if ( has_post_thumbnail()) : ?>
					<a href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail('large'); ?></a>
					<h2 class="category-dylan"><?php the_category(); ?></h2>
					<h3 class="title"><a class= "title" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
					<?php endif ?>
				</div>
			<?php $i++; endwhile; ?>

				<div class="jumbotron-right grid-x grid-padding-x cell small-12 medium-6 large-6">	
				<?php $i = 0; while ($popular_posts_loop->have_posts() && $i < 4) : $popular_posts_loop->the_post(); ?>	
				<article class="article-dylan cell  small-6 large-6">
					<?php if ( has_post_thumbnail()) : ?>
					<a href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail('large'); ?></a>
					<h3 class="title2"><a class= "title2" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
					<?php endif ?>
				</article>
				<?php $i++; endwhile ?>				
            </div>
        </div> <!-- end #content -->