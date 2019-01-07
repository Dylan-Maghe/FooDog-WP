<?php
/**
 * Template part for displaying a single post
 */
?>
<?php wp_nav_menu(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<p class="tag">	<?php
global $post;
$postcat = get_the_category( $post->ID );
if (!empty($postcat)) {
	echo $postcat[0]->name;    
}	
?></p>
<?php 
$post_7 = get_post($post->ID); 
$title = $post_7->post_title;
$content = $post_7->post_content;
// echo $title;
// echo $picture;
// echo $content;

?>					
	<h2><?= $title; ?></h2>
	<figure><?= the_post_thumbnail('full'); ?></figure>
	<?= $content; ?>
	<?php comments_template(); ?>	
													
</article> <!-- end article -->