<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mechanics
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body >
	<header id="header">
		<div class="row top">
			<div class="col-md-5 hidden-sm hidden-xs">
				<?php if(get_theme_mod('top_header_address')) {?>
				<span class="glyphicon glyphicon-map-marker"></span>
				<span><?php echo get_theme_mod('top_header_address');?></span>
				<?php } ?>
			</div>
			<div class=" col-md-3 hidden-sm hidden-xs">
				<?php if (get_theme_mod('top_header_phone')){?>
				<span class="glyphicon glyphicon-earphone"></span>
				<span > <?php echo get_theme_mod('top_header_phone');?> </span>
				<?php } ?>
			</div>
			<div class="col-md-3 hidden-sm hidden-xs">
				<?php if (get_theme_mod('top_header_email')){?>
				<span class="glyphicon glyphicon-envelope"></span>
				<span> <?php echo get_theme_mod('top_header_email');?> </span>
				<?php }?>
			</div>
		</div>
		

				

			<div >
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
							<a href="http://localhost/garage/" class="custom-logo-link" rel="home" itemprop="url"><img width="190" height="90" src="http://localhost/garage/wp-content/uploads/2017/07/cropped-logo.png" class="custom-logo" alt="Garage" itemprop="logo" /></a>						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav"><li class="page_item page-item-40"><a href="http://localhost/garage/cart/">Cart</a></li>
<li class="page_item page-item-41"><a href="http://localhost/garage/checkout/">Checkout</a></li>
<li class="page_item page-item-5 current_page_item"><a href="http://localhost/garage/">Home</a></li>
<li class="page_item page-item-42"><a href="http://localhost/garage/my-account/">My account</a></li>
<li class="page_item page-item-2"><a href="http://localhost/garage/sample-page/">Sample Page</a></li>
<li class="page_item page-item-39"><a href="http://localhost/garage/shop/">Shop</a></li>
</ul>
						</div>
					</div>
				</nav>
			</div>

	</header>
