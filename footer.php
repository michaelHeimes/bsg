<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="left cell small-12 medium-4 tablet-6">
								<div><a href="<?php echo home_url(); ?>">
									
									<?php 
									$image = get_field('footer_logo', 'option');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
																		
								<?php bloginfo('name'); ?></a></div>
								
								<div class="grid-x grid-padding-x">
									<div class="cell small-6">
										<h4>Location</h4>
										<div><?php the_field('location', 'option');?></div>
									</div>
	
									<div class="cell small-6">
										<h4>Contact</h4>
										<div><a href="mailto:<?php the_field('phone_number', 'option');?>"><?php the_field('phone_number', 'option');?></a></div>
										<div><a href="tel:<?php the_field('email', 'option');?>"><?php the_field('email', 'option');?></a></div>
									</div>
								</div>
								
							</div>
	
	
							<div class="right cell small-12 medium-8 tablet-6">
								
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>							
								
							</div>
							
	
							
							<div class="bottom cell">
								
								<div class="grid-x grid-padding-x">
								
									<div class="left cell small-12 medium-4 tablet-6">
										<a href="<?php the_field('twitter_url');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter-footer.svg" alt="Twitter Logo"/></a>
										<a href="<?php the_field('linkedin_url');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin-footer.svg" alt="LinkedIn Logo"/></a>
									</div>
									
									<div class="right cell small-12 medium-8 tablet-6">
										<div class="grid-x grid-padding-x">
											<?php 
											$link = get_field('privacy_link', 'option');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											<div class="cell shrink">
											    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											</div>
											<?php endif; ?>
											<div class="source-org copyright cell auto">&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></div>
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