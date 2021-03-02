<section class="partners-module presskit">
	
		<?php 
		$image = get_sub_field('background_image');
		if( !empty( $image ) ): ?>
		<div class="img-wrap text-center">
		    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		
			<div class="card-wrap grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="inner cell">
					
					<div class="grid-x grid-padding-x align-middle">
						
						<div class="cell shrink"><h2>Press Kit</h2></div>
						<div class="cell auto">For press inquiries contact <a href="mailto:<?php the_sub_field('contact_email');?>"><?php the_sub_field('contact_email');?></a></div>
					
						<?php if( have_rows('download_items') ):?>
						<div class="cell">
							<div class="items-wrap grid-x grid-padding-x">
								<?php while ( have_rows('download_items') ) : the_row();?>	
							
								<?php if( have_rows('single_item') ):?>
									<?php while ( have_rows('single_item') ) : the_row();?>	
			
									<div class="single-item cell small-12 medium-6">
										
										<div class="grid-x grid-padding-x">
											
											<div class="left cell shrink">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/download.svg" alt="download"/>
											</div>
											
											<div class="right cell auto text-left">
												<h3><?php the_sub_field('name');?></h3>
												<p><?php the_sub_field('description');?></p>
											</div>
											
										</div>	
										
									</div>
								
									<?php endwhile;?>
								<?php endif;?>
							
								<?php endwhile;?>
							</div>
						</div>
						<?php endif;?>
						
					</div>
	
				</div>
	
			</div>
		
		</div>
		
		<?php endif; ?>
			
</section>