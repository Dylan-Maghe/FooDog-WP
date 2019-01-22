<!-- PARTIE FEATURED -->

<h5 class="titleliner">FEATURED POSTS</h5>


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
					<div class="cell medium-6 small-12 large-4">     
						<?php if ( has_post_thumbnail()) : ?>
							<a class="img-featured-post" href= "<?php the_permalink(); ?>" ><?php the_post_thumbnail('medium'); ?></a>
						<?php endif ?>
					</div>

  					<div class="cell medium-6 small-12 large-8">
						<?php if ( has_post_thumbnail()) : ?>
							<h4 class="current-category"> <?php the_category(); ?></h4>
                			<h3 class="title"> <a href= "<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
							<p><?php the_excerpt() ?></p>
						<?php endif ?>

						<div class="share"><a href="#"><i class="fas fa-share"></i>SHARE</a></div>
					</div>

					  	<div class="cell medium-12">
							<hr>
					   </div>

					  
				<?php $i++; endwhile ?>

			</div>

<!-- FIN PARTIE FEATURED -->