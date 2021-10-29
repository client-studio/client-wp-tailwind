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
			<div class="m-8 text-center">
				<div class="text-white text-5xl md:text-15xl mb-3">404</div>
				<p class="text-gray-100 text-2xl md:text-3xl font-light mb-8"><?php _e( 'Sorry, the page you are looking for could not be found.', 'tailpress' ); ?></p>
				<a href="<?php echo get_bloginfo( 'url' ); ?>" class="bg-primary px-4 py-3 px-6 rounded text-white">
					<?php _e( 'Frontpage', 'tailpress' ); ?>
				</a>
			</div>
		</div>
	</div>
</body>
</html>
