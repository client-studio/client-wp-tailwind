<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="bg-black sticky top-0 z-50">

	<nav class="main-menu">
	  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
	    <div class="flex justify-between items-center w-100">

				<div class="flex items-center">
	        <div class="flex-shrink-0 logo">
						<a href="/">
		          <span class="sr-only"><?php echo get_bloginfo( 'name' );?></span>
		          <img class="h-5 w-auto" src="<?php bloginfo( 'template_directory' ); ?>/img/logo.svg" alt="<?php echo get_bloginfo( 'name' );?>">
		        </a>

					</div>


	        <div class="hidden lg:block">
	          <div class="flex space-x-4">

	          </div>
	        </div>

				</div>

					<div class="flex ml-auto">

	      <div class="hidden md:flex">
					<div class="mr-3 mt-2 lg:mt-0 space-x-1 sm:space-x-2 md:space-x-3">
						<?php
							wp_nav_menu(
								array(
									'container_id'    => 'primary-menu',
									'container'				=> 'none',
									'menu_class'      => 'flex text-white font-medium',
									'theme_location'  => 'primary',
									'li_class'        => 'text-gray-300 hover:text-white px-3 py-2 rounded-md text-xs sm:text-sm md:text-base font-medium',
									'fallback_cb'     => false,
								)
							);
							?>

					</div>
	      </div>

	      <div class="-mr-2 flex md:hidden">
	        <!-- Mobile menu button -->
	        <button type="button" class="menu-toggle inline-flex items-center justify-center p-3 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
	          <span class="sr-only">Open menu</span>
	          <!--
	            Icon when menu is closed.

	            Heroicon name: outline/menu

	            Menu open: "hidden", Menu closed: "block"
	          -->
	          <svg class="block h-8 w-10 icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
	          </svg>
	          <!--
	            Icon when menu is open.

	            Heroicon name: outline/x

	            Menu open: "block", Menu closed: "hidden"
	          -->
	          <svg class="hidden h-8 w-10 icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
	          </svg>
	        </button>
	      </div>

				</div>

	    </div>
	  </div>

	  <!-- Mobile menu, show/hide based on menu state. -->
	  <div class="hidden lg:hidden px-3" id="mobile-menu">
	    <div class="pb-3">
	      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
				<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container'				=> 'none',
							'menu_class'      => 'pl-0 ml-0 mr-5 -pl-5 list-none',
							'theme_location'  => 'primary',
							'li_class'        => 'text-gray-300 hover:bg-gray-900 hover:text-white block px-3 py-3 mb-1 rounded-md text-lg font-medium',
							'fallback_cb'     => false,
						)
					);
					?>

			</div>

	  </div>
	</nav>

	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
