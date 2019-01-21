<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 

// Popular Posts
function count_post_visits() {
    if( is_single() ) {
    global $post;
    $views = get_post_meta( $post->ID, 'my_post_viewed', true );
    if( $views == '' ) {
    update_post_meta( $post->ID, 'my_post_viewed', '1' ); 
    } else {
    $views_no = intval( $views );
    update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
    }
    }
   }
   add_action( 'wp_head', 'count_post_visits' );
// /Popular Posts

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
// /COMMENT FORM