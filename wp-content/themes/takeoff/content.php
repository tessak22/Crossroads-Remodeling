<?php
/**
 * default content output
 * page
 * single
 * attachment
 *
 * @package takeoff
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php the_content(); ?>

    <?php comments_template(); ?>

</article>
