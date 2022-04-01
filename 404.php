<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body class="antialiased bg-black">
	<div class="md:flex min-h-screen">
		<div class="w-full md:w-1/2 md:mx-auto flex items-center justify-center">
			<article class="m-8 text-center">
				<div class="text-white text-5xl md:text-8xl mb-3">404</div>
				<p class="text-gray-100 text-2xl mb-8"><?php _e( 'Sorry, this page or content is missing.', 'client' ); ?></p>
				<a href="<?php echo get_bloginfo( 'url' ); ?>" class="btn">
					<?php _e( 'Return home', 'client' ); ?>
				</a>
			</article>
		</div>
	</div>
</body>
</html>
