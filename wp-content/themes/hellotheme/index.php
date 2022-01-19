<?php



get_header(); ?>


<main class="otherPages newsList">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <?php the_content(); ?>

    <?php endwhile; else: ?>

            <h4 class="bg-blue p-3 text-white">Sorry, no results found.</h4>

    <?php endif; ?>
</main>







<?php get_footer(); ?>