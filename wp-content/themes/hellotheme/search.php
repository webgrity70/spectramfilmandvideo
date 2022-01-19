<?php get_header(); ?>



<main>

    <?php get_template_part('template-parts/hero'); ?>







    <div class="container my-5">

        <div class="row">
        

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-md-3">
            <div class="article mb-4 p-3">
                <?php the_post_thumbnail( 'thumbnail', ['class'=>'img-fluid'] ); ?>
              <h4 class="mb-0 articleTitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
              <div class="card-body">
                <?php echo  mb_strimwidth( get_the_excerpt(),0,250,'...' ); ?>
                <a class="readmoreLink" href="<?php the_permalink();?>">Read More</a>
              </div>
            </div>
        </div>










    <?php endwhile; else: ?>

            <h4 class="bg-blue p-3 text-white">Sorry, no results found.</h4>

    <?php endif; ?>
        </div>
    </div>
</main>






<?php get_footer(); ?>