<?php
/**
 * The template for displaying search form
 */
 ?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
										<label>
											<span class="screen-reader-text"><?php echo _x( 'Votre recherche:', 'label', 'jointswp' ) ?></span>
											<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Recherche...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Votre recherche:', 'jointswp' ) ?>" />
										</label>
										<input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Rechercher', 'jointswp' ) ?>" /> <!--ajoute le bouton dans le modal-->
									</form>