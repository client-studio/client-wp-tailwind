<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

<div class="site-container py-16 lg:py-24">

      <article>
        <h2><?php the_sub_field('title'); ?></h2>
      </article>

        <?php $i = 0; ?>
        <?php if( have_rows('repeater') ): ?>
        <div class="faq flex-grow w-full lg:px-5 lg:pl-28">
            <ul class="list-none" x-data="{selected:null}">
                <?php while( have_rows('repeater') ): the_row(); ?>

                          <li class="mb-5">
                              <h3 class="border-b cursor-pointer border-gray-300 py-3 text-xl hover:text-primary" @click="selected !== <?php echo $i ?> ? selected = <?php echo $i ?> : selected = null">
                                <?php the_sub_field('question'); ?></h3>
                                <article x-show="selected == <?php echo $i ?>" class="py-4 text-gray-700">
                                      <?php the_sub_field('answer'); ?>
                                </article>
                          </li>

                <?php $i++; endwhile; ?>
              </ul>
          </div>
          <?php endif; ?>

</div>
