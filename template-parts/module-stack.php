<div class="slides relative md:snap-y min-h-screen">
  <?php $j = 1; ?>
   <?php if( have_rows('repeater') ): ?>
   <?php while( have_rows('repeater') ): the_row(); ?>

   <div id="stack-<?php echo $j ?>" class="snap-start md:sticky top-0 w-full overflow-hidden<?php if($j % 2): ?> bg-black text-white<?php else: ?> bg-white text-black<?php endif; ?>">
      <div class="md:min-h-screen max-w-6xl mx-auto py-32 md:py-10 md:pt-10 md:pb-20 px-6 md:px-10 flex items-center">

            <article class="lead">
               <?php the_sub_field( 'content' )?>
            </article>

      </div>
   </div>

   <?php $j++ ?>
   <?php endwhile; ?>
   <?php endif; ?>

</div>
