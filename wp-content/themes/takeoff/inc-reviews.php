<?php
/**
 * page-specific include
 */

$reviews = new WP_Query(array(
    'post_type' => 'reviews',
    'nopaging' => true,
    'orderby' => 'menu_order',
    'order' => 'menu_order',
));
?>

<div class="reviews col-sm-10 col-sm-offset-1">
<?php if ($reviews->have_posts()) : ?>
    <?php while ($reviews->have_posts()) : $reviews->the_post(); $fields = (object) get_fields(); ?>
        <div class="review">
            <?php the_content(); ?>
            <h5><?php the_title(); ?></h5>
            <h6><?php the_date(); ?></h6>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>
</div>