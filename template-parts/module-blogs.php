<div class="py-10">

	<div class="max-w-7xl mx-auto mb-5">
		<h2 class="text-3xl px-10">News</h2>
	</div>

		<div class="max-w-7xl mx-auto px-10 grid md:grid-cols-3 gap-x-5">

			<?php $the_query = new WP_Query( 'post_type=post&post_status=publish&posts_per_page=3' );
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="post">

			<a href="<?php the_permalink(); ?>" class="block mt-4">
					<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid rounded-xl w-100 h-auto' ) ); ?>

					<div>
						<a href="<?php the_permalink(); ?>" class="inline-block">
							<span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
								Article
							</span>
						</a>
					</div>
				<h2 class="text-xl">
				<?php the_title(); ?>
				</h2>

			</a>
			<p class="mt-3 text-sm text-gray-500">
				<?php the_excerpt(); ?>
			</p>
			<div class="mt-6 flex items-center">
				<div class="flex-shrink-0">


						<img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">

				</div>
				<div class="ml-3">
					<p class="text-sm font-medium text-gray-900">
						<?php echo the_author_meta( 'nickname', $current_user->ID ); ?>
					</p>
					<div class="flex space-x-1 text-sm text-gray-500">
						<time datetime="<?php the_date('d.m.Y'); ?>">
							<?php the_date('d.m.Y'); ?>
						</time>

					</div>
				</div>
			</div>
		</div>

			<?php endwhile; endif;	wp_reset_postdata();	?>


		</div>

</div>
