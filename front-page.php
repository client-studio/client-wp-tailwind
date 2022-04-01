<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php
     if ( wp_is_mobile() ) {
      $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );
     } else {
      $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
     }
   ?>

		 <div class="relative bg-black">
			 <div class="w-100">
				 <div class="relative sm:overflow-hidden">
					 <?php if ( has_post_thumbnail() ) { ?>
					 <div class="absolute inset-0">
						 <img class="h-full w-full object-cover" src="<?php echo $img[0]; ?>" alt="">
						 <div class="absolute inset-0 opacity-50 bg-gradient-to-b from-black to-dark mix-blend-multiply"></div>
					 </div>
					 <?php } ?>
					 <div class="relative px-4 sm:px-6 py-32 lg:py-48 lg:px-8 max-w-4xl mx-auto">

						 <article class="lead text-white text-center">
						 	<?php the_content(); ?>
						 </article>

							 <?php
								$link = get_field('hero_button');
								if( $link ):
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<div class="pt-0 flex justify-center">
											<a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>">
 				 							<?php echo esc_html($link_title); ?>
											</a>
										</div>
								<?php endif; ?>

					 </div>

				 </div>
			 </div>
		 </div>


	<?php get_template_part( 'page', 'modules' ); ?>


<?php endwhile; endif; ?>



<?php get_footer(); ?>
