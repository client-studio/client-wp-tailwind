<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>


<div class="relative w-full bg-gray-100">

    <div class="max-w-7xl mx-auto py-16 lg:py-24">
        <div class="px-8 md:px-16">

            <div class="lg:flex">
                <article>
                <h2>
                <?php the_sub_field('otsikko'); ?>
                </h2>
                </article>


                <?php $i = 0; ?>
                <?php if( have_rows('repeater') ): ?>
                  <div class="faq flex-grow w-full lg:px-5 lg:pl-28">
                    <ul class="list-none" x-data="{selected:null}">
                  <?php while( have_rows('repeater') ): the_row();
                      $image = get_sub_field('image');
                      ?>

                          <li class="mb-5">
                              <h3 class="border-b cursor-pointer border-gray-300 py-3 text-xl font-bold hover:text-primary" @click="selected !== <?php echo $i ?> ? selected = <?php echo $i ?> : selected = null">
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

        </div>
    </div>

</div>
