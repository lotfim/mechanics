<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mechanics
 */

 $about_us_set_up = get_theme_mod('footer_about_us') || get_theme_mod('social_link_facebook') ||
                    get_theme_mod('social_link_twitter') || get_theme_mod('social_link_google_plus') ||
					get_theme_mod('social_link_linkedIn');
 $contact_us_set_up = get_theme_mod('footer_address') || get_theme_mod('footer_phone') || get_theme_mod('social_email');
 $quick_links_set_up = (get_theme_mod('footer_quick_link_1') && get_theme_mod('footer_quick_link_1_url')) ||
                       (get_theme_mod('footer_quick_link_2') && get_theme_mod('footer_quick_link_2_url')) ||
                       (get_theme_mod('footer_quick_link_3') && get_theme_mod('footer_quick_link_3_url')) ||
                       (get_theme_mod('footer_quick_link_4') && get_theme_mod('footer_quick_link_4_url'));
?>
	
	
	<footer id="footer">
		<div class="row">
			<div class="col-md-4">
				<h4> <?php if($about_us_set_up){?> About us <?php }?> </h4>
				<p><?php if(get_theme_mod('footer_about_us')){?>
					<?php echo get_theme_mod('footer_about_us');?>
				   <?php }?>
				</p>
				<p> <?php if(get_theme_mod('social_link_facebook')){?>
					<span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_facebook')); ?>" target="_blank"> <i class="icon fa fa-facebook icon-circle icon-xs icon-white" > </i> </a> </span>
					<?php } ?>
					<?php if(get_theme_mod('social_link_twitter')){?>
					<span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_twitter')); ?>" target="_blank"> <i class="icon fa fa-twitter icon-circle icon-xs icon-white" > </i> </a> </span>
					<?php } ?>
					<?php if(get_theme_mod('social_link_google_plus')){?>
					<span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_google_plus')); ?>" target="_blank"> <i class="fa icon fa fa-google-plus icon-circle icon-xs icon-white" > </i> </a> </span>
					<?php } ?>
					<?php if(get_theme_mod('social_link_linkedIn')){?>
					<span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_linkedIn')); ?>" target="_blank"> <i class="icon fa fa-linkedin icon-circle icon-xs icon-white" > </i> </a> </span>
					<?php } ?>
				</p>
			</div>
			<div class="col-md-4">
				<h4><?php if($contact_us_set_up){?>Contact us<?php } ?></h4>
				<p><?php if(get_theme_mod('footer_address')){?>
					<span class="glyphicon glyphicon-map-marker"></span>
					<span><a class="footer-link"><?php echo get_theme_mod('footer_address');?></a></span>
				   <?php } ?>
				</p>
				<p><?php if(get_theme_mod('footer_phone')){?>
					<span class="glyphicon glyphicon-earphone"></span>
					<span ><a class="footer-link" href="<?php echo 'tel:' . get_theme_mod('footer_phone');?>"> <?php echo get_theme_mod('footer_phone');?></a> </span>
				   <?php } ?>
				</p>
				<p><?php if(get_theme_mod('footer_email')){?>
					<span class="glyphicon glyphicon-envelope"></span>
					<span><a class="footer-link" href="<?php echo 'mailto:' . get_theme_mod('footer_email');?>"> <?php echo get_theme_mod('footer_email');?></a></span>
				   <?php } ?>
				</p>
			</div>
			<div class="col-md-4">
				<h4><?php if($quick_links_set_up){?> Quick links <?php }?></h4>
				<p><?php if(get_theme_mod('footer_quick_link_1') && get_theme_mod('footer_quick_link_1_url')) {?>
				   <span><a class="footer-link" target="_blank" href="<?php echo esc_url(get_theme_mod('footer_quick_link_1_url')); ?>"> <?php echo get_theme_mod('footer_quick_link_1');?></a></span>
				   <?php }?>
				</p>
				<p><?php if(get_theme_mod('footer_quick_link_2') && get_theme_mod('footer_quick_link_2_url')) {?>
				   <span><a class="footer-link" target="_blank" href="<?php echo esc_url(get_theme_mod('footer_quick_link_2_url')); ?>"> <?php echo get_theme_mod('footer_quick_link_2');?></a></span>
				   <?php }?>
				</p>
				<p><?php if(get_theme_mod('footer_quick_link_3') && get_theme_mod('footer_quick_link_3_url')) {?>
				   <span><a class="footer-link" target="_blank" href="<?php echo esc_url(get_theme_mod('footer_quick_link_3_url')); ?>"> <?php echo get_theme_mod('footer_quick_link_3');?></a></span>
				   <?php }?>
				</p>
				<p><?php if(get_theme_mod('footer_quick_link_4') && get_theme_mod('footer_quick_link_4_url')) {?>
				   <span><a class="footer-link" target="_blank" href="<?php echo esc_url(get_theme_mod('footer_quick_link_4_url')); ?>"> <?php echo get_theme_mod('footer_quick_link_4');?></a></span>
				   <?php }?>
				</p>
			</div>
		</div>
	</footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
