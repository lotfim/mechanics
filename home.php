<?php
/**
 * Template Name: Home Page
 */
?>
<?php get_header(); ?>
		<div >
			<div class="row banner">
				<div class="col-md-offset-6 col-md-6 col-sm-12">
					<br>
					<h2><?php echo get_theme_mod('homepage_banner_title');?></h2>
					<br>
					<p> <?php echo get_theme_mod('homepage_banner_catchphrase');?> </p>
					<br>
					<a href="<?php echo get_page_link(get_theme_mod('homepage_banner_button_link')); ?>"><?php if(get_theme_mod('homepage_banner_button_text')){echo get_theme_mod('homepage_banner_button_text');} else { echo 'Learn more';} ?> </a>
					<br><br>
				</div>
			</div>
			<div class="row infos">
				<?php
					$argumentSetUp = get_theme_mod('homepage_banner_information_arg_1') || get_theme_mod('homepage_banner_information_arg_2') || get_theme_mod('homepage_banner_information_arg_3');
					$openingHoursSetUp = get_theme_mod('homepage_banner_information_opening_weekdays') || get_theme_mod('homepage_banner_information_opening_saturday') || get_theme_mod('homepage_banner_information_opening_sunday');
					$contactUsSetUp = get_theme_mod('homepage_banner_information_phone') || get_theme_mod('homepage_banner_information_mobile') || get_theme_mod('homepage_banner_information_fax');
				?>
				<?php if( $argumentSetUp){ ?>
				<div class="col-md-offset-1 col-md-4 ">
				
					<h3 class="border-right"> Why us </h3><br>
					<ul><?php if(get_theme_mod('homepage_banner_information_arg_1')){?>  
						<li><?php echo get_theme_mod('homepage_banner_information_arg_1');?></li><?php }?>
						<?php if(get_theme_mod('homepage_banner_information_arg_2')){?>  
						<li><?php echo get_theme_mod('homepage_banner_information_arg_2');?></li><?php }?>
						<?php if(get_theme_mod('homepage_banner_information_arg_3')){?>  
						<li><?php echo get_theme_mod('homepage_banner_information_arg_3');?></li><?php }?>
					</ul>
				
				</div>
				<?php } ?>
				<?php if($openingHoursSetUp){?>
				<div class=" col-md-3 col-sm-6 <?php if(!$argumentSetUp){echo "col-md-offset-4";} ?>">
					<h3 class="border-right"> Opening hours </h3><br>
					<div class="opening-days">
						<?php if(get_theme_mod('homepage_banner_information_opening_weekdays')){?>
						<p>Weekdays:&nbsp;&nbsp;&nbsp;</p><?php }?>
						<?php if(get_theme_mod('homepage_banner_information_opening_saturday')){?>
						<p>Saturday:&nbsp;&nbsp;&nbsp;</p><?php } ?>
						<?php if(get_theme_mod('homepage_banner_information_opening_sunday')){?>
						<p>Sunday:&nbsp;&nbsp;&nbsp;</p><?php }?>
					</div>
					<div class="opening-hours">
						<?php if(get_theme_mod('homepage_banner_information_opening_weekdays')){?>
						<p><?php echo get_theme_mod('homepage_banner_information_opening_weekdays');?></p><?php } ?>
						<?php if(get_theme_mod('homepage_banner_information_opening_saturday')){?>
						<p><?php echo get_theme_mod('homepage_banner_information_opening_saturday');?></p><?php } ?>
						<?php if(get_theme_mod('homepage_banner_information_opening_sunday')){?>
						<p><?php echo get_theme_mod('homepage_banner_information_opening_sunday');?></p><?php } ?>
					</div>
				</div>
				<?php } ?>
				<?php if($contactUsSetUp){?>
				<div class="col-md-3 col-sm-6 <?php if(!$argumentSetUp && !$openingHoursSetUp){echo "col-md-offset-5";} ?>">
					<h3> Get in touch </h3><br>
					<?php if(get_theme_mod('homepage_banner_information_phone')){?>
					<p class="phone-number"><?php echo get_theme_mod('homepage_banner_information_phone');?> </p><?php } ?>
					<?php if(get_theme_mod('homepage_banner_information_mobile')){?>
					<p class="get-in-touch"> <span class="get-in-touch-label"> Mobile:&nbsp;</span><span class="get-in-touch-content"><?php echo get_theme_mod('homepage_banner_information_mobile');?> </span> </p><?php } ?>
					<?php if(get_theme_mod('homepage_banner_information_fax')){?>
					<p class="get-in-touch"> <span class="get-in-touch-label">Fax:&nbsp; </span><span class="get-in-touch-content"> <?php echo get_theme_mod('homepage_banner_information_fax');?></span></p><?php } ?>			
				</div>				
				<?php } ?>
			</div>
			<?php if(get_theme_mod('homepage_all_services_button_link')){ ?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 title-and-description">
					<h2 class="services-title"><?php echo get_theme_mod('homepage_services_title_text');?> </h2>
					
				</div>
			</div><?php }?><br><br>
			<div class="row">
				<?php if(get_theme_mod('homepage_all_services_button_link')){ ?>
				<div class="col-md-6 services">
					<div class="row">
						<?php if(get_theme_mod('air_filtration_icon_display')){ ?>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="thumbnail-variant-1"><span class="icon icon-circle icon-lg icon-primary car-repire-icon-46"></span>
								<div class="caption"><a class="link link-default title-thumbnail" href="#"><?php if(get_theme_mod('air_filtration_icon_text')){echo get_theme_mod('air_filtration_icon_text');} else { ?> Air Filtration <?php } ?></a></div>
							</div>
						</div><?php } ?>
						<?php if(get_theme_mod('oil_change_icon_display')){ ?>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="thumbnail-variant-1"><span class="icon icon-circle icon-lg icon-primary car-repire-icon-22"></span>
								<div class="caption"><a class="link link-default title-thumbnail" href="#"><?php if(get_theme_mod('oil_change_icon_text')){echo get_theme_mod('oil_change_icon_text');} else { ?>oil change<?php } ?></a></div>
							</div>
						</div><?php } ?>
						<?php if(get_theme_mod('tires_icon_display')){ ?>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="thumbnail-variant-1"><span class="icon icon-circle icon-lg icon-primary car-repire-icon-31"></span>
								<div class="caption"><a class="link link-default title-thumbnail" href="#"><?php if(get_theme_mod('tires_icon_text')){echo get_theme_mod('tires_icon_text');} else { ?>tires<?php } ?></a></div>
							</div>
						</div><?php } ?>
						<?php if(get_theme_mod('maintenance_icon_display')){ ?>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="thumbnail-variant-1"><span class="icon icon-circle icon-lg icon-primary car-repire-icon-38"></span>
								<div class="caption"><a class="link link-default title-thumbnail" href="#"><?php if(get_theme_mod('maintenance_icon_text')){echo get_theme_mod('maintenance_icon_text');} else { ?>maintenance<?php } ?></a></div>
							</div>
						</div><?php } ?>
						<?php if(get_theme_mod('tow_truck_icon_display')){ ?>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="thumbnail-variant-1"><span class="icon icon-circle icon-lg icon-primary car-repire-icon-06"></span>
								<div class="caption"><a class="link link-default title-thumbnail" href="#"><?php if(get_theme_mod('tow_truck_icon_text')){echo get_theme_mod('tow_truck_icon_text');} else { ?>tow truck<?php } ?></a></div>
							</div>
						</div><?php } ?>
						<?php if(get_theme_mod('batteries_icon_display')){ ?>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="thumbnail-variant-1"><span class="icon icon-circle icon-lg icon-primary car-repire-icon-23"></span>
								<div class="caption"><a class="link link-default title-thumbnail" href="#"><?php if(get_theme_mod('batteries_icon_text')){echo get_theme_mod('batteries_icon_text');} else { ?>batteries<?php } ?></a></div>
							</div>
						</div><?php } ?>
					</div><br>
					<div class="row">
						<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-xs-offset-1 col-xs-11" >
							<a class="button" href="<?php echo get_page_link(get_theme_mod('homepage_all_services_button_link')); ?>"><?php if(get_theme_mod('homepage_services_button_text')){echo get_theme_mod('homepage_services_button_text'); }else { ?>View all services <?php } ?> </a>
						</div>
					</div><br><br>
				</div><?php } ?>
				<div class="col-md-6">
					<?php if(get_theme_mod('homepage_services_side_image') && get_theme_mod('homepage_all_services_button_link')){?>
					<img src="<?php echo get_theme_mod('homepage_services_side_image'); ?>" alt="garage" width="580" height="440" /><?php } ?>
				</div><br>
				<?php
					$team_member_1_set_up = get_theme_mod('homepage_team_member_1_picture') && get_theme_mod('homepage_team_member_1_name') && get_theme_mod('homepage_team_member_1_function');
					$team_member_2_set_up = get_theme_mod('homepage_team_member_2_picture') && get_theme_mod('homepage_team_member_2_name') && get_theme_mod('homepage_team_member_2_function');
					$team_member_3_set_up = get_theme_mod('homepage_team_member_3_picture') && get_theme_mod('homepage_team_member_3_name') && get_theme_mod('homepage_team_member_3_function');
					$team_member_4_set_up = get_theme_mod('homepage_team_member_4_picture') && get_theme_mod('homepage_team_member_4_name') && get_theme_mod('homepage_team_member_4_function');
					$team_member_5_set_up = get_theme_mod('homepage_team_member_5_picture') && get_theme_mod('homepage_team_member_5_name') && get_theme_mod('homepage_team_member_5_function');
					$team_member_6_set_up = get_theme_mod('homepage_team_member_6_picture') && get_theme_mod('homepage_team_member_6_name') && get_theme_mod('homepage_team_member_6_function');
					$team_member_7_set_up = get_theme_mod('homepage_team_member_7_picture') && get_theme_mod('homepage_team_member_7_name') && get_theme_mod('homepage_team_member_7_function');
					$team_member_8_set_up = get_theme_mod('homepage_team_member_8_picture') && get_theme_mod('homepage_team_member_8_name') && get_theme_mod('homepage_team_member_8_function');
					$team_set_up = $team_member_1_set_up || $team_member_2_set_up || $team_member_3_set_up || $team_member_4_set_up ||
                                   $team_member_5_set_up || $team_member_6_set_up || $team_member_7_set_up || $team_member_8_set_up;					
				?>
				<?php if($team_set_up){?>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 title-and-description">
						<h2 class="team-title"><?php echo get_theme_mod('homepage_team_title_text');?> </h2>
					
					</div>
				</div><?php } ?><br>
				<div class="row our-team">
					<?php if($team_member_1_set_up ){?>
					<div class="team-member col-md-3 col-sm-6 col-xs-12">
						<img  src="<?php echo get_theme_mod('homepage_team_member_1_picture');?>" alt="Team Member" width="250" height="175"/><br>
						<span class="team-member-name"><?php echo get_theme_mod('homepage_team_member_1_name');?> </span><br>
						<span class="team-member-function"><?php echo get_theme_mod('homepage_team_member_1_function');?></span><br><br>
					</div>
					<?php } ?>
					<?php if($team_member_2_set_up ){?>
					<div class="team-member col-md-3 col-sm-6 col-xs-12">
						<img  src="<?php echo get_theme_mod('homepage_team_member_2_picture');?>" alt="Team Member" width="250" height="175"/><br>
						<span class="team-member-name"><?php echo get_theme_mod('homepage_team_member_2_name');?> </span><br>
						<span class="team-member-function"><?php echo get_theme_mod('homepage_team_member_2_function');?></span><br><br>
					</div>
					<?php } ?>
					<?php if($team_member_3_set_up ){?>
					<div class="team-member col-md-3 col-sm-6 col-xs-12">
						<img  src="<?php echo get_theme_mod('homepage_team_member_3_picture');?>" alt="Team Member" width="250" height="175"/><br>
						<span class="team-member-name"><?php echo get_theme_mod('homepage_team_member_3_name');?> </span><br>
						<span class="team-member-function"><?php echo get_theme_mod('homepage_team_member_3_function');?></span><br><br>
					</div>
					<?php } ?>
					<?php if($team_member_4_set_up ){?>
					<div class="team-member col-md-3 col-sm-6 col-xs-12">
						<img  src="<?php echo get_theme_mod('homepage_team_member_4_picture');?>" alt="Team Member" width="250" height="175"/><br>
						<span class="team-member-name"><?php echo get_theme_mod('homepage_team_member_4_name');?> </span><br>
						<span class="team-member-function"><?php echo get_theme_mod('homepage_team_member_4_function');?></span><br><br>
					</div>
					<?php } ?>
					<?php if($team_member_5_set_up ){?>
					<div class="team-member col-md-3 col-sm-6 col-xs-12">
						<img  src="<?php echo get_theme_mod('homepage_team_member_5_picture');?>" alt="Team Member" width="250" height="175"/><br>
						<span class="team-member-name"><?php echo get_theme_mod('homepage_team_member_5_name');?> </span><br>
						<span class="team-member-function"><?php echo get_theme_mod('homepage_team_member_5_function');?></span><br><br>
					</div>
					<?php } ?>
					<?php if($team_member_6_set_up ){?>
					<div class="team-member col-md-3 col-sm-6 col-xs-12">
						<img  src="<?php echo get_theme_mod('homepage_team_member_6_picture');?>" alt="Team Member" width="250" height="175"/><br>
						<span class="team-member-name"><?php echo get_theme_mod('homepage_team_member_6_name');?> </span><br>
						<span class="team-member-function"><?php echo get_theme_mod('homepage_team_member_6_function');?></span><br><br>
					</div>
					<?php } ?>
					<?php if($team_member_7_set_up ){?>
					<div class="team-member col-md-3 col-sm-6 col-xs-12">
						<img  src="<?php echo get_theme_mod('homepage_team_member_7_picture');?>" alt="Team Member" width="250" height="175"/><br>
						<span class="team-member-name"><?php echo get_theme_mod('homepage_team_member_7_name');?> </span><br>
						<span class="team-member-function"><?php echo get_theme_mod('homepage_team_member_7_function');?></span><br><br>
					</div>
					<?php } ?>
					<?php if($team_member_8_set_up ){?>
					<div class="team-member col-md-3 col-sm-6 col-xs-12">
						<img  src="<?php echo get_theme_mod('homepage_team_member_8_picture');?>" alt="Team Member" width="250" height="175"/><br>
						<span class="team-member-name"><?php echo get_theme_mod('homepage_team_member_8_name');?> </span><br>
						<span class="team-member-function"><?php echo get_theme_mod('homepage_team_member_8_function');?></span><br><br>
					</div>
					<?php } ?>				
				</div>
			</div>
			<?php
			$params = array('posts_per_page' => 8, 'post_type' => 'product');
			$wc_query = new WP_Query($params);
			?>
			
			<?php if ($wc_query->have_posts() && class_exists( 'WooCommerce' )){?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 title-and-description">
					<h2 class="products-title"><?php echo get_theme_mod('homepage_products_title_text')?> </h2>
					
				</div>
			</div><?php } ?><br>
			<?php if(class_exists( 'WooCommerce' ) ){?>
			<div class="row our-products">
				<?php while ($wc_query->have_posts()){
				$wc_query->the_post();	?>
				<div class="product col-md-3 col-sm-6 col-xs-12">
					<?php $product = new WC_Product(get_the_ID());?>
					<?php the_post_thumbnail();?><br><br>
					<span class="product-name"><?php the_title(); ?> </span><br>
					<span class="product-price"><?php  echo wc_price($product->get_price_including_tax(1, $product->get_sale_price())) ; ?></span><br><br>
					<span><a class="button" href="<?php the_permalink(); ?>">View Product </a></span><br><br>
				</div>
				<?php }?>
			</div><?php } ?>
		</div>
		<br>
<?php get_footer();?>