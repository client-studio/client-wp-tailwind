<?php
/*
Template Name: Plain text
*/
get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <div class="site-container py-24">

          <article>
            <?php the_content(); ?>
          </article>

    </div>


<?php get_template_part( 'page', 'modules' ); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
