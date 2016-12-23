<?php
/**
 * page
 * front page
 *
 * @package Bedstone
 */

get_header(); ?>

<div id="content">

    <section id="intro">
        <div class="container-fluid">
            <div class="intro col-sm-8 col-sm-offset-2">
                <h2>Affordable, high quality construction with a company that stands behind their work.</h2>
                <a class="btn btn-primary" href="#about">Learn More</a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container-fluid">
            <div class="content col-sm-10 col-sm-offset-1" role="main">
                <h2><?php the_title(); ?></h2>
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('content');
                }
                ?>
                <?php get_template_part('inc', 'sections');?>
            </div>
        </div>
    </section>

<section id="projects">
    <div class="container-fluid">
        <h2>Recent Projects</h2>
        <div class="projects col-sm-10 col-sm-offset-1">
            <?php get_template_part('inc', 'projects');?>
        </div>
    </div>
</section>

<section id="reviews">
    <div class="container-fluid">
        <h2>Customer Reviews</h2>
        <?php get_template_part('inc', 'reviews');?>
    </div>
</section>

<?php get_footer(); ?>
