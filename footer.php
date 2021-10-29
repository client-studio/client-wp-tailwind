
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>


<footer class="bg-black" aria-labelledby="footer">

	<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">

    <div class="grid grid-cols-2 md:grid-cols-5 xl:gap-8">

      <div class="space-y-8 col-span-2 foot-col mb-16">
        <img class="h-5 w-auto" src="<?php bloginfo( 'template_directory' ); ?>/img/logo.svg" alt="<?php echo get_bloginfo( 'name' );?>">
				<div class="md:w-3/4">
					<div class="text-gray-500 text-sm">

	        </div>
				</div>

					  <?php get_template_part( 'template-parts/block', 'social' ); ?>

      </div>


          <div class="mb-8 md:mb-0 foot-col">
             <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
          </div>

          <div class="foot-col">
             <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
          </div>

          <div class="mt-12 md:mt-0 foot-col">
             <?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
          </div>


      </div>

    <div class="mt-12 border-t border-gray-200 pt-8 pb-10">
			<div class="sm:flex sm:justify-between space-x-8 px-3">

				<div>
				<p class="text-xs text-gray-400">
					 &copy; <?php echo date('Y');?> All rights reserved.
	      </p>
				</div>


				<div class="text-xs text-gray-400">
					<?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
				</div>

			</div>
		</div>

	</div>

</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
