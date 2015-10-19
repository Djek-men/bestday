<?php
/*
 * Template Name: general template
 */
get_header(); ?>


    <!-- begin main -->
<section class="main menulist block grid4 clearfix">





    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <header>
            <h2 class="post-title">
                <?php the_title(); ?>
            </h2>
        </header>

        <?php the_content(); ?>

    <?php endwhile; endif;?>





</section>
    <!-- end main -->



<?php get_footer(); ?>