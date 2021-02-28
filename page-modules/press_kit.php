<section class="partners-module module">
	
	<div class="img-wrap text-center">
		
		<?php 
		$image = get_sub_field('image');
		if( !empty( $image ) ): ?>
		    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
		
		<div class="card-wrap">
			<div class="grid-container">
				
				<div class="grid-x grid-padding-x">
					<div class="cell shrink"><h2>Press Kit</h2></div>
					<div class="cell auto">For press inquiries contact <a href="mailto:<?php the_sub_field('contact_email');?>"><?php the_sub_field('contact_email');?></a></div>
				</div>
				
				<?php if( have_rows('download_items') ):?>
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
				<?php endif;?>

			</div>

		</div>
		
	</div>
	
</section>