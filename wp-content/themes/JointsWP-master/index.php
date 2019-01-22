
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

	<main class="main small-12 medium-12 large-12 cell" role="main">

	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
			<?php get_template_part( 'parts/loop', 'jumbotron' ); ?>

	</main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->
	<div class="grid-x">
	<div class="cell large-9">
	<?php get_template_part( 'parts/loop', 'stickypost' ); ?>
	<?php get_template_part( 'parts/loop', 'latest-post' ); ?>
	</div>
	<div class="cell large-3">
		<?php get_sidebar(); ?>
	</div>
	</div><!-- end featured -->

<?php get_footer(); ?>


