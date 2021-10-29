<?php get_header(); ?>

<div class="container mx-auto my-8">


			<div class="pt-10 pb-20">

				<div class="max-w-7xl mx-auto mb-16 mt-10 text-center">
					<article>
					<h1 class="text-center">
					<?php the_archive_title(); ?>
					</h1>

					<h5 class="text-center">
					<?php the_archive_description(); ?>
					</h5>

					</article>
				</div>

					<div class="max-w-7xl mx-auto">

						<div class="news-archive grid grid-cols-1 md:grid-cols-2 md:gap-x-10 pb-12">

							<?php if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) :
									the_post();
									?>
									<div class="post text-center mb-6">

									<a href="<?php the_permalink(); ?>" class="block mt-4">

										<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid rounded-xl w-100 h-auto' ) ); ?>

										<h2 class="text-3xl lg:text-4xl font-bold mt-5">
										<?php the_title(); ?>
										</h2>

										<div class="text-sm mt-3 text-gray-500 font-medium">
										<time datetime="<?php the_time('d.m.Y'); ?>">
											<?php the_time('F jS, Y'); ?>
										</time>
										</div>

									</a>
									<p class="mt-3 text-sm text-gray-500">
										<?php the_excerpt(); ?>
									</p>

								</div>
						<?php endwhile; endif;	?>

					</div>

					</div>

			</div>


</div>

<?php
get_footer();
