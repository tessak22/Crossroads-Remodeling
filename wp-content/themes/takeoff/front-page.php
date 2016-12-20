<?php
/**
 * page
 * front page
 *
 * @package Bedstone
 */

get_header(); ?>

<header class="document-header">
    <div class="container">
        <div class="row">
            <div class="page-title col-md-12">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php get_template_part('nav', 'breadcrumbs'); ?>
        </div>
    </div>
</header>

<main class="site-main container">

<div class="container-columns row">
    <div class="content col-sm-9" role="main">
        <?php
        while (have_posts()) {
            the_post();
            get_template_part('content');
        }
        ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
