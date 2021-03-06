<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased' ); ?>>

<div id="page" class="min-h-screen flex flex-col">

	<header class="bg-black sticky top-0 z-50 main-header">

	<nav class="main-menu site-container">
	  <div class="py-4">
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
	          -->
	          <svg class="block h-8 w-10 icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
	          </svg>
	          <!--
	            Icon when menu is open.
	          -->
	          <svg class="hidden h-8 w-10 icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
	          </svg>
	        </button>
	      </div>

				</div>

	    </div>
	  </div>

	</nav>

	  <!-- Mobile menu -->
	  <div class="hidden site-container lg:hidden" id="mobile-menu">
	    <div class="pb-5">
	     	<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container'				=> 'none',
							'menu_class'      => 'pl-0 ml-0 pt-5 list-none',
							'theme_location'  => 'primary',
							'li_class'        => 'text-gray-300 hover:text-white block py-3 mb-1 text-lg font-medium',
							'fallback_cb'     => false,
						)
					);
					?>

			</div>

	  </div>


	</header>

	<div id="content" class="site-content flex-grow">

		<main>
