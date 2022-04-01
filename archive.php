<?php get_header(); ?>

<div class="site-container my-12">

					<article class="text-center">
					<h1><?php the_archive_title(); ?></h1>
					<h5><?php the_archive_description(); ?></h5>
					</article>

					<div class="news-archive grid grid-cols-1 md:grid-cols-2 md:gap-x-10 pb-12">
							<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

									 <?php get_template_part( 'loop' ); ?>

							<?php endwhile; endif;	?>

					</div>

					<div class="mb-8">
					  <?php client_pagination(); ?>
					</div>

</div>

<?php
get_footer();
