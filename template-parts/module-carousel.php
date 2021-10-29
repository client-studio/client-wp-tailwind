<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<div class="bg-transparent">
  <div class="max-w-screen-xl mx-auto">
    <div class="mx-6 sm:mx-12 lg:mx-16 mb-12">

    <h2 class="text-3xl font-medium mb-12">
      Examples of our work
    </h2>

    <ul class="carousel relative overflow-hidden outline-none" data-flickity='{ "groupCells": false, "autoPlay": 2000, "wrapAround": true, "pageDots": false, "prevNextButtons": false, "draggable": true }'>


      <?php $the_query = new WP_Query( 'post_type=post&post_status=publish&posts_per_page=9' );
      if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


      <li class="w-full w-4/5 md:w-4/12 pr-10">


          <a href="/cases/" class="relative rounded-xl overflow-hidden h-96 flex items-end transition-all duration-700 ease-in-out transform hover:scale-95 solutions-box">

            <div class="absolute inset-0 transition-all duration-700 ease-in-out transform hover:scale-110">

            <?php the_post_thumbnail( 'medium', array( 'class' => '"w-full h-full object-cover' ) ); ?>

            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-dark opacity-90 mix-blend-multiply" aria-hidden="true"></div>
            </div>


            <div class="relative px-4 lg:px-5 pb-10">
              <h1 class="font-medium tracking-tight text-white text-2xl mb-2"><?php the_title();?></h1>
              <span class="mt-2 text-sm text-gray-300"><?php the_content(); ?></span>
            </div>
          </a>



      </li>

      <?php endwhile; endif;	wp_reset_postdata();	?>


    </ul>

    </div>
  </div>
</div>
