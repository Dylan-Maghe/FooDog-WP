<?php
/**
 * Template part for displaying a single post
 */
?>
<?php
$popular_posts_args = array(
 'posts_per_page' => 3,
 'meta_key' => 'my_post_viewed',
 'orderby' => 'meta_value_num',
 'order'=> 'DESC'
);
 
$popular_posts_loop = new WP_Query( $popular_posts_args );
 
while( $popular_posts_loop->have_posts() ):
 $popular_posts_loop->the_post();
 the_title();
endwhile;
wp_reset_query();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<p class="tag">	<?php
global $post;
$postcat = get_the_category( $post->ID );
if (!empty($postcat)) {
	echo $postcat[0]->name;    
}	
?></p>

<div class="content">
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
	<?php echo wpautop( $content); ?>
</div><!-- // content -->
	<div class="banner">SHARE</div>

	<div class="newsletter">
		<h4>Subscribe to The digest Newsletter</h4>
		<p>Généralement, on utilise un texte en faux latin.</p>
	<div class="input-group">
  			<input class="input-group-field" type="email" placeholder="Your email">
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

	
	<?php
	
	// COMMENT FORM
		  $commenter = wp_get_current_commenter();
		  $req = get_option( 'require_name_email' );
		  $aria_req = ( $req ? " aria-required='true'" : '' );
	
	$fields =  array(
		
		'author' =>
		  '<div class="cell large-4"><p class="comment-form-author"><label for="author">' . __( '', 'domainreference' ) .
		  ( $req ? '<span class="required"></span>' : '' ) . '</label>' .
		  '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		  '" size="30" placeholder="Name..."' . $aria_req . ' /></p></div>',
	  
		'email' =>
		  '<div class="cell large-4"><p class="comment-form-email"><label for="email">' . __( '', 'domainreference' ) .
		  ( $req ? '<span class="required"></span>' : '' ) . '</label>' .
		  '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		  '" size="30" placeholder="Email..."' . $aria_req . ' /></p></div>',
	  
		'url' =>
		  '<div class="cell large-4"><p class="comment-form-url"><label for="url">' . __( '', 'domainreference' ) . '</label>' .
		  '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		  '" size="30" placeholder="Website..." /></p></div></div>',
	  );


	$args = array(
		'id_form'           => 'commentform',
		'class_form'      => 'comment-form',
		'id_submit'         => 'submit',
		'class_submit'      => 'button',
		'name_submit'       => 'submit',
		'title_reply'       => __( 'LEAVE A RESPONSE' ),
		'title_reply_to'    => __( ' to %s' ),
		'cancel_reply_link' => __( 'Cancel Reply' ),
		'label_submit'      => __( 'LEAVE A COMMENT' ),
		'format'            => 'xhtml',
		'comment_notes_before' => '',
	  
		'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun' ) .
		  '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Write your comment here...">' .
		  '</textarea></p><div class="grid-x grid-margin-x">',
	  

		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	  );
	  comments_template();
	get_comment();  
	// SHOW COMMENT FORM
	comment_form($args); 
		
	?>
	

</article> <!-- end article -->