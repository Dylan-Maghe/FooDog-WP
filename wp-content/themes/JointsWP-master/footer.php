<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="wrap">
				<div class="grid-container">
					<div class="grid-x grid-padding-x ">
						<div class=" categories cell large-4 medium-6"><h5>CATEGORIES</h5> 
							<?php wp_nav_menu( array('footer-links'));?>
						</div>

						<div class=" popular cell large-4 medium-6"><h5>POPULAR POST</h5> 
							<div class="grid-x grid-padding-x ">
								
									<?php
									$args = array(
										'thumbnail_width' => 105,
										'thumbnail_height' => 85,
										'limit' => 3
											);

										wpp_get_mostpopular( $args );?>
								

								
							</div>
							
						</div>
						
						<div class="instagram cell large-4"><h5>INSTAGRAM</h5>
							<p><img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/photo-1518020382113-a7e8fc38eac9-1.jpeg">
							<img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/berkay-gumustekin-402114-unsplash.jpg">
							<img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/photo-1534628526458-a8de087b1123.jpeg"></p>
							<p><img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/elena-taranenko-973157-unsplash.jpg">
							<img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/adorable-animals-canine-160829.jpg">
							<img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/photo-1510771463146-e89e6e86560e.jpeg"></p>
							<p><img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/photo-1534949842529-5172a66135b9.jpeg">
							<img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/photo-1536677412572-c277de11e458.jpeg">
							<img class="demo" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/photo-1516131537578-9ca049cc6b59.jpeg"></p>
						</div>
						
					</div>	
				</div>
				<div class="grid-x grid-padding-x">
					<div class="reseaux cell large-12">
						<div class="grid-container">
							<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>	
						</div>
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