<?php // get ACF modules using flexible content ?>
<?php if( have_rows('modules') ): while ( have_rows('modules') ) : the_row(); ?>

    <?php if( get_row_layout() == 'form' ): ?>

        <?php get_template_part( 'template-parts/module', 'form' ); ?>

    <?php endif; ?>

    <?php if( get_row_layout() == 'text' ): ?>

        <?php get_template_part( 'template-parts/module', 'text' ); ?>

    <?php endif; ?>

    <?php if( get_row_layout() == 'blogs' ): ?>

        <?php get_template_part( 'template-parts/module', 'blogs' ); ?>

    <?php endif; ?>


    <?php if( get_row_layout() == 'features' ): ?>

        <?php get_template_part( 'template-parts/module', 'feature' ); ?>

    <?php endif; ?>

     <?php if( get_row_layout() == 'carousel' ): ?>

        <?php get_template_part( 'template-parts/module', 'carousel' ); ?>

    <?php endif; ?>



<?php endwhile; endif; ?>
