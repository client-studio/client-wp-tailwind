<div class="relative loop">

<a href="<?php the_permalink(); ?>">

<div class=" transition-all duration-700 ease-in-out transform md:hover:scale-95 duration-700 overflow-hidden hover:rounded-2xl">
  <img src="<?php the_post_thumbnail_url('thumbnail') ?>" class="w-full rounded-sm h-full object-cover md:hover:scale-110 transition-all transform-gpu duration-700" alt="<?php the_title() ?>" loading="lazy">
</div>

<article class="relative pt-4">

    <time datetime="<?php the_date('d.m.Y'); ?>">
    <?php the_date('d.m.Y'); ?>
    </time>

    <h3 class="text-white pt-2"><?php the_title(); ?></h3>

</article>

</a>

</div>
