<?php 
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar" class="sidebar small-12 medium-4 large-4 cell" role="complementary">
	<article class="try-now">
	<div class="follow-us">
	<p>FOLLOW US</p>
	<div class="social-icons"><i class="fab fa-twitter"></i><i class="fab fa-facebook-f"></i><i class="fab fa-instagram"></i><i class="fab fa-pinterest-p"></i></div>
	</div>
	<figure>
		<img src="<?php 
		echo wp_get_attachment_url(92); ?> " alt="Chien">
	</figure>
	<a href="#" class="button">TRY NOW</a>
	<footer class="grid-x grid-margin-x">
		<div class="cell large-4 tiket">
<div class="circle">
  <div class="circle__inner">
    <div class="circle__wrapper">
      <div class="circle__content">THE FARMER'S DOG</div>
    </div>
  </div>
</div><!-- end circle -->
	</div>
	<div class="cell large-8">
	<p>REAL PET FOOD MADE FRESH DELIVERED <span><cite>Cute dog no included</cite></span> </p>
	</div>
</footer>
</article>
	<!-- <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php endif; ?> -->

</div>