<div class="py-10 site-container">

		<article class="py-4">
		<h2 class="text-3xl">News</h2>
		</article>

		<div class="grid md:grid-cols-3 gap-x-5">

			<?php $the_query = new WP_Query( 'post_type=post&post_status=publish&posts_per_page=3' );
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			  <?php get_template_part( 'loop' ); ?>

			<?php endwhile; endif;	wp_reset_postdata();	?>

		</div>

</div>
