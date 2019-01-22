<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
<div class="content">

<div class="inner-content grid-x grid-margin-x grid-padding-x">

	<main class="main small-12 medium-8 large-12 cell" role="main">
	
			
	</main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->
<?php get_template_part( 'parts/loop', 'jumbotron' ); ?>
	<div class="grid-x">
		<div class="cell large-9">
			<?php get_template_part( 'parts/loop', 'latest-post' ); ?>
		</div>
		<div class="cell large-3">
		<?php get_sidebar(); ?>
	</div>
	</div><!-- end featured -->

<?php get_footer(); ?>


	<div class="content">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-8 large-8 cell" role="main">



         
<!-- PARTIE FEATURED -->

		<!-- TITRE  -->
	<div class="grid-x grid-padding-x"> <!-- Aligned to the left -->

		<div class="cell padTitre medium-3 small-12 large-3">     
			<h6>FEATURED POSTS</h6>
		</div>

  		<div class="cell padLine medium-9 small-12 large-9">
			<div class="line">
		</div>

	</div>


		<!-- CONTENU -->

<?php

$recentPosts = new WP_Query();
$sticky = get_option('sticky_posts');
$args = array(
'post_per_page' => 3,
'order' => 'DSC',
'orderby' => 'date',
'post__in' => $sticky,
);

$recentPosts->query($args);

?> 


			<div class="grid-x grid-padding-x"> <!-- Aligned to the left -->
				
				<?php $i = 0; while ($recentPosts->have_posts() && $i < 3) : $recentPosts->the_post(); ?> 
					<div class="cell medium-6 small-12 large-6">     
						<?php if ( has_post_thumbnail()) : ?>
							<a href= "<?php the_permalink(); ?>" ><?php the_post_thumbnail(‘large’); ?></a>
						<?php endif ?>
					</div>

  					<div class="cell medium-6 small-12 large-6">
						<?php if ( has_post_thumbnail()) : ?>
							<h4 class="category"> <?php the_category(); ?></h4>
                			<h3 class="title"> <a href= "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
							<p><?php the_content(); ?></p>
						<?php endif ?>

						<div class="share"><a href="#"><i class="fas fa-share"></i>SHARE</a></div>
					</div>

					  	<div class="cell medium-12">
							<hr>
					   </div>

					  
				<?php $i++; endwhile ?>

			</div>

<!-- FIN PARTIE FEATURED -->

																								
		    </main> <!-- end #main -->
		    
		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
