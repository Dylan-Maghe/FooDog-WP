<?php


get_header(); ?>

<?php 
    $CurrentPage = get_query_var("paged");
    $term = get_queried_object();

    $categoryArgs = array (
        "posts_per_page" => 8,
        "paged" => $CurrentPage,
        "category_name" => $term->slug,
		"orderby" => "date",
		"order"   => "DESC",
		"ignore_sticky_posts" => 1,
	);

    $category = new WP_Query($categoryArgs);
?>
    <div class="grid-x">
        <div class="title-container cell small-12 medium-12 large-12">
            <h1 class="main-title-category"><?php echo strtoupper($term->slug); ?></h1>
        </div>
        <div class="cell large-9">
    <div class="inner-content grid-x grid-padding-x grid-container ">
            <?php $i=0; while( $category->have_posts()): $category->the_post();?>    
            <div class="category-content cell small-12 medium-12 large-12" id= <?php echo $i ?>>
            <div class="category-post cell small-6 medium-6 large-6">
                    <?php if ( has_post_thumbnail()) : ?>
                    <a class="img-category" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail("medium"); ?></a>
                </div>
        
                <div class="right-category cell small-6 medium-6 large-6">
                    <h2 class="current-category"><?php the_category();  ?></h2>
                    <h3 class="title-category"><a class= "title-category" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
                    <?php the_excerpt() ?>
                    <?php endif ?>
                </div>
                </div>
        <?php $i++; endwhile; ?>
	</div>
	<div class="pagination-latest-post cell large-8">
		<?php 
			echo paginate_links(array(
					"total" => $category->max_num_pages,
					"prev_text" => __("<", "textdomain"),
					"next_text" => __(">", "textdomain"),
					));
		?>
	</div>
                </div>
                
    <div class="cell large-3">
        <?php get_sidebar()?>
    </div>
    </div>			
</div>

<?php get_footer(); ?>
