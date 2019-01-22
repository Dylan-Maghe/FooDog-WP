<?php
/**
 * Template part for displaying a single post
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<p class="tag">	
	<?php
	global $post;
	$postcat = get_the_category( $post->ID );
	if (!empty($postcat)) {
		echo $postcat[0]->name;    
	}	
	?>
	</p>
	

<div class="content">
	<?php 
	$post = get_post($post->ID); 
	$title = $post->post_title;
	$content = $post->post_content;
	?>					
	<h2><?= $title; ?></h2>
	<figure><?= the_post_thumbnail('full'); ?></figure>
	<div class="banner banner-top grid-x">
	<div class="farmer-dog cell large-6">
	<div class="circle">
		<div class="circle__inner">
			<div class="circle__wrapper">
			<div class="circle__content">THE FARMER'S Dog</div>
			</div>
		</div>
	</div><!-- end circle -->
	<p><span>By :</span> The Farmers Dog</p>
	</div>
	<div class="share cell large-6">
		<a href="#commentform"><div class="comment-btn button"><i class="fas fa-comment"></i>COMMENT</div></a>
			<div class="social"><p>SHARE</p> 

				<a href=""><i class="fab fa-facebook-f circle-icon"></i></a>
				<a href=""><i class="fab fa-twitter circle-icon"></i></a>
				<a href=""><i class="fab fa-pinterest-p circle-icon"></i></a>
			</div>
	</div>
</div>
<div class="text">
	<?php echo wpautop( $content); ?>
</div>
</div><!-- // content -->
<div class="banner banner-bottom">
	<div class="social grid-x">		
		<p class="cell large-2">SHARE</p>
		<div class="comment-btn button cell large-2"><i class="fas fa-comment"></i><?php comments_number('0', '', '%'); ?> COMMENTS</div>
		<div class="facebook-btn button cell large-2"><i class="fab fa-facebook-f"></i>SHARE</div>
		<div class="twitter-btn button cell large-2"><i class="fab fa-twitter"></i>TWEET</div>
		<div class="pinterest-btn button cell large-2"><i class="fab fa-pinterest-p"></i>PIN IT</div>
	</div></div>
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
	<div class="pagination grid-x">
		<div class="cell large-6"><?php previous_post_link('<p>< PREVIOUS ARTICLE</P><strong>%link</strong>'); ?></div>
		<div class="cell large-6"><?php next_post_link('<p>NEXT ARTICLE ></P><strong>%link</strong>'); ?></div>
	</div>
	<div class="badge grid-x">
		<div class="cell large-2">
	<div class="circle">
		<div class="circle__inner">
			<div class="circle__wrapper">
			<div class="circle__content">THE FARMER'S Dog</div>
			</div>
		</div>
	</div><!-- end circle -->
	</div>
	<div class="cell large-10">
	<h5>The Farmer's Dog</h5><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	</div></div>
	<div class="post-like">
		<h5 class="titleliner">
		<span>YOU MIGHT ALSO LIKE</span>	
		</h5>
		<?php joints_related_posts(); ?>
	</div>

	<div class="content">
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

// /COMMENT FORM
	comments_template();
	get_comment(); 
	comment_form($args); ?>
	</div>

</article> <!-- end article -->

<script>
$(function() {
    /**
    * Smooth scrolling to page anchor on click
    **/
    $("a[href*='#']:not([href='#'])").click(function() {
        if (
            location.hostname == this.hostname
            && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
            if ( anchor.length ) {
                $("html, body").animate( { scrollTop: anchor.offset().top }, 1500);
            }
        }
    });
});
</script>