<?php
/**
 * page
 * front page
 *
 * @package Bedstone
 */

get_header(); ?>

<section id="about">
    <div class="container-fluid">
        <div class="content col-sm-10 col-sm-offset-1" role="main">
            <?php
            while (have_posts()) {
                the_post();
                get_template_part('content');
            }
            ?>
        </div>
    </div>
</section>

<section id="projects">
    <div class="container-fluid">
        <div class="projects col-sm-10 col-sm-offset-1">
            <?php get_template_part('inc', 'projects');?>
        </div>
    </div>
</section>

<section id="reviews">
    <div class="container-fluid">
        <?php get_template_part('inc', 'reviews');?>
    </div>
</section>

<?php get_footer(); ?>
