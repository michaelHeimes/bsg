<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer dark-green-bg" role="contentinfo">
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-padding-x align-justify">
							
							<div class="logo-wrap mobile hide-for-tablet cell"><a href="<?php echo home_url(); ?>">
								
								<?php 
								$image = get_field('footer_logo', 'option');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
																	
								<span class="show-for-sr"><?php bloginfo('name'); ?></span></a>
							
							</div>
							
							<div class="left cell small-12 medium-4 tablet-shrink">
								
								<div class="logo-wrap show-for-tablet"><a href="<?php echo home_url(); ?>">
									
									<?php 
									$image = get_field('footer_logo', 'option');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
																		
									<span class="show-for-sr"><?php bloginfo('name'); ?></span></a>
								
								</div>
								
								<div class="contact-wrap grid-x grid-padding-x">
									<div class="cell shrink">
										<div class="contact-label">Location</div>
										<div>
											<?php the_field('location', 'option');?>
										</div>
										
											<?php 
											$link = get_field('google_maps_link', 'option');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											<div>
											    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											</div>
											<?php endif; ?>											
									</div>
	
									<div class="cell shrink">
										<div class="contact-label">Contact</div>
										<div><?php the_field('phone_number', 'option');?></div>
										<div><a href="mailto:<?php the_field('email', 'option');?>"><?php the_field('email', 'option');?></a></div>
									</div>
								</div>
								
							</div>
	
	
							<div class="right cell small-12 medium-8 tablet-auto" style="max-width:<?php the_field('footer_right_max-width', 'option');?>px">
								
								<?php if( $footer_heading = get_field('footer_heading', 'option') ):?>
									<h2><?php echo $footer_heading;?></h2>
								<?php endif;?>
								
								<div class="footer-pipe"></div>
								
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>							
								
							</div>
							
	
							
							<div class="bottom cell">
								
								<div class="grid-x grid-padding-x align-justify align-middle">
								
									<div class="left cell small-12 medium-4 tablet-shrink">
										<div class="inner">
											<a href="<?php the_field('twitter_url', 'option');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter-footer.svg" alt="Twitter Logo"/></a>
											<a href="<?php the_field('linkedin_url', 'option');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin-footer.svg" alt="LinkedIn Logo"/></a>
										</div>
									</div>
									
									<div class="right cell small-12 medium-8 tablet-shrink" style="max-width:<?php the_field('footer_right_max-width', 'option');?>px">
										<div class="grid-x grid-padding-x">
											<?php 
											$link = get_field('privacy_link', 'option');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											<div class="cell small-12 medium-shrink">
											    <a class="underlined" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											</div>
											<?php endif; ?>
											<div class="source-org copyright cell small-12 medium-auto">&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a class="underlined" href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></div>
										</div>
									</div>
								
								</div>
								
							</div>
	
						
						</div> <!-- end #inner-footer -->
						
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->