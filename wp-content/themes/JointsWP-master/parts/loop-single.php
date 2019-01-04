<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<p class="tag">	<?php

global $post;
$postcat = get_the_category( $post->ID );

// try print_r($postcat) ;  

if ( ! empty( $postcat ) ) {
	$value = 0;
	foreach ($postcat as $key) { ?> <p> <?php
		echo esc_html($postcat[$value++]->name); 
		?> </p> <?php 
	}
      
}
// echo $postcat[0]->name;
// var_dump($postcat);
	?></p>					
	<?php comments_template(); ?>	
													
</article> <!-- end article -->