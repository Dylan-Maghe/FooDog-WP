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
	<div class="banner">STICKERS - COMMENT - SHARE</div>
	<?= $content; ?>
	<div class="banner">SHARE</div>

	<div class="newsletter">
		<h4>Subscribe to The digest Newsletter</h4>
		<p>Ici</p>
	<div class="input-group">
  			<input class="input-group-field" type="number" placeholder="Your email">
  		<div class="input-group-button">
    		<input type="submit" class="button" value="Submit">
  		</div>
	</div>
	</div>
	<div class="pagination grid-x"><div class="cell large-6">PREVIOUS</div><div class="cell large-6">AFTER</div></div>
	<div class="badge">
	<figure>IMG</figure>	
	<h4>The Farmer's Dog</h4><p>The Farmer's Dog</p>
	</div>

	<div class="post-like">
		<h4>YOU MIGHT ALSO LIKE</h4>
		<p>LOOP</p>
	</div>
	<?php comments_template(); ?>
		<?php $comments_args = array(
        // Change the title of send button 
        'label_submit' => __( 'Send', 'textdomain' ),
        // Change the title of the reply section
        'title_reply' => __( 'Write a Reply or Comment', 'textdomain' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);
comment_form( $comments_args );?>										
</article> <!-- end article -->