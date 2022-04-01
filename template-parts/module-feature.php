<?php $invert = get_sub_field('invert'); ?>
<div class="site-container py-6 module-feature">

   <div class="flex flex-col-reverse md:flex-row gap-6 md:gap-12 <?php if ($invert === true) : ?>md:flex-row-reverse<?php endif ?>">

			<div class="content w-full md:w-1/2">

				 <article class="lead">
            <?php the_sub_field('text'); ?>
         </article>

				 <?php
				 $link = get_sub_field('button');
				 if( $link ):
				 $link_url = $link['url'];
				 $link_title = $link['title'];
				 $link_target = $link['target'] ? $link['target'] : '_self';
				 ?>
         <a class="block mt-4 mb-10 btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>">
            <?php echo esc_html($link_title); ?>
         </a>
				 <?php endif; ?>

      </div>

			<div class="image w-full md:w-1/2 mb-4 md:mb-0">
         <?php $img = get_sub_field('image'); ?><?php if( $img ): ?>
         <img src="<?php echo $img['sizes']['large']; ?>" class="w-full h-full object-contain rounded object-top" />
         <?php endif; ?>
      </div>

   </div>
</div>
