<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Arke
 * @copyright  Copyright (c) 2018, Danny Cooper
 * @license    https://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Tolve Travel</title>
	
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/style.css?v=1.2">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<!-- Google-fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Roboto+Slab:wght@200;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

	
	<!-- Font- Awesome -->
	<link rel="stylesheet" href="https://tolve.co/wp-content/themes/arke-child/css/all.css">

	<!-- Owl-carousel CSS -->
	<link rel="stylesheet" href="https://tolve.co/wp-content/themes/arke-child/css/owl.carousel.css" >


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<script>
	$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds

      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
(function () {
	$('.hamburger-menu').on('click', function() {
		$('.bar').toggleClass('animate');
    var mobileNav = $('.mobile-nav');
    mobileNav.toggleClass('hide show');
	})
})();
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 300) {
        $(".header").addClass("darkHeader");
    } else {
        $(".header").removeClass("darkHeader");
    }
});


</script>	
	
	
</head>


	
	
	
<body>

	<div class="wrap">

		
			
	<section class="top-banner">	
		
  <div class="whiteHeader">
		<div class="logo">
		<a href="<?php echo home_url(); ?>"><img src="https://tolve.co/wp-content/themes/arke-child/assets/tolve-logo-23v5-lt-300.png" title="Tolve" alt="logo" ></a>
		</div>  
		<nav role='navigation'>
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />
    
    <!--
    Some spans to act as a hamburger.
    
    -->
    <span></span>
    <span></span>
    <span></span>
    
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
     <li><a href="destinations">destinations</a></li>
     <li><a href="custom-travel" >custom travel</a></li>
	 <li><a href="booking">booking</a></li>		
     <li> <a href="ethos">ethos</a></li>
     <li> <a href="founders">founders</a></li>
	<!-- <li><a href="coffee">coffee</a></li>  hiding coffee page for now -->
		<li>&nbsp;</li>
		<li> <a href="https://tolve.co/">home</a></li>
      <li><a href="contact">get in touch</a></li>
		<br/><br/>
      <li> <a href="https://instagram.com/tolve.co" target="_blank"><img src="https://tolve.co/wp-content/themes/arke-child/assets/ig-19.png" ></a></li>
    
    </ul>
  </div>
</nav>
		</div>		
			
			
			<header class="site-header clear">
					<div class="site-branding">

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>

						<?php else : ?>

							<p class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</p>

						<?php endif; ?>

					</div><!-- .site-branding -->
				
					<nav id="site-navigation" class="menu-1">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'site-menu',
									'depth'          => 1,
									'fallback_cb'    => false,
								)
							);
							?>
					</nav><!-- .menu-1 -->
				
			</header><!-- .site-header -->
			
		
			
			<div class="site-content">
					<div id="content-area" class="content-area">
