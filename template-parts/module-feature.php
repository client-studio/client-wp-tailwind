<div class="site-container py-6 module-feature">

					<?php $j = 1; ?>

					 <?php if( have_rows('repeater') ): while ( have_rows('repeater') ) : the_row(); ?>
						 <div class="grid grid-cols-1 md:gap-5 sm:grid-cols-2 flex items-center py-5">

							 <?php $img = get_sub_field('image'); ?><?php if( $img ): ?>
									<div class="highlight--img overflow-hidden rounded-2xl shadow-lg lg:m-5 <?php if($j%2 == 0) : ?>md:order-2<?php endif; ?>">
									 <img src="<?php echo $img['sizes']['large']; ?>" class="img-fluid" />
									</div>
								<?php endif; ?>

							 <article class="p-3 md:p-5 <?php if($j%2 == 0) : ?>md:order-1<?php endif; ?>">

								 <div class="pb-5 lg:pb-0"></div>

								<?php the_sub_field('content'); ?>

								<?php
								$link = get_sub_field('button');
								if( $link ):
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>

								<div class="pt-0">
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="py-3 px-6 border border-gray-200 hover:border-gray-500 transition-colors duration-300 text-base font-medium rounded-full text-black relative">
											<?php echo esc_html( $link_title ); ?>
										</a>
								</div>
								<?php endif; ?>

							 </article>


						 </div>
						 <?php $j++ ?>
						<?php endwhile; endif; ?>

</div>
