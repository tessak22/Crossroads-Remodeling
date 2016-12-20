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

    <?php if ('post' == get_post_type() || $article_title != get_the_title()) : ?>
        <header class="article-header">
            <h1><?php echo $article_title; ?></h1>
            <?php
            if ('post' == get_post_type()) {
                get_template_part('nav', 'article-meta');
            }
            ?>
        </header>
    <?php endif; ?>

    <?php the_content(); ?>

    <?php comments_template(); ?>

</article>
