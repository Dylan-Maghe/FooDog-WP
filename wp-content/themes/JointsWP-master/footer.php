<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */		
	
 ?>
 <?php
	
	$popular_posts_args = array(
	'meta_key' => 'my_post_viewed',
 	'orderby' => 'meta_value_num',
 	'order'=> 'DESC'
	);
 
	$popular_posts_loop = new WP_Query( $popular_posts_args );	
	
	?>	
					
				<footer class="wrap">
				<div class="grid-container">
					<div class="grid-x grid-padding-x ">
						<!--CATEGORIES-->
						<div class="categories cell large-4 medium-6"><h5>CATEGORIES</h5> 
							<?php wp_nav_menu( array('footer-links'));?>
						</div>
						<!--POPOLAR POST-->
						<div class=" popular cell large-4 medium-6"><h5>POPULAR POST</h5> 
							<div class="grid-x grid-padding-x ">
								
							<?php $i = 0; while( $popular_posts_loop->have_posts() && $i < 3 ): $popular_posts_loop->the_post(); ?>
				<div class="cell grid-x small-12 medium-12 large-12">
					<div class="cell large-3">
					<?php if ( has_post_thumbnail()) : ?>
					
					
					<div class="cell large-9">
					<a class="img-jumbotron" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail('large'); ?></a>
					</div>
					<h3 class="title"><a class= "title" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
					</div>
					<?php endif ?>
					</div>
			    <?php $i++; endwhile; ?>



							</div>	
						</div>
						<!--INSTAGRAM-->
						<div class="instagram cell large-4"><h5>INSTAGRAM</h5>
							<p>
								<img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg">
							<img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg">
							<img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg"></p>
							<p><img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg">
							<img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg">
							<img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg"></p>
							<p><img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg">
							<img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg">
							<img class="demo" src="http://192.168.64.3/FooDog-WP/wp-content/uploads/2019/01/charles-deluvio-547196-unsplash.jpg"></p>
						</div>
						
					</div>	
				</div>
				<!--RESEAUX SOCIAUX-->
				<div class="grid-x grid-padding-x">
					<div class="reseaux cell large-12">
						<div class="grid-container">
							<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>	
						</div>
						<!--ARROW-->
						<div style="text-align:right">
							<i class="arrow fa fa-caret-up"></i>
						</div>	
					</div>
				</div>
					


	    	</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->