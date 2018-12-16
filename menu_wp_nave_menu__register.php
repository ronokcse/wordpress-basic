<?php 
// Register menu location
   register_nav_menus( [
   		'main-menu'   =>esc_html__('Main Menu','wpheirarchy')

   ] );	

   //wp_nav_menu  setup
   $args=[
			'theme_location' =>'main-menu'
		];
   wp_nav_menu( $args );


 ?>