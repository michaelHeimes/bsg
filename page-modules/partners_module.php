<section class="partners-module">
	
	<div class="img-wrap text-center">
		
		<?php 
		$image = get_sub_field('image');
		if( !empty( $image ) ): ?>
		<div class="img-wrap text-center">
		    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		    
			<div class="card-wrap grid-container">
				<div class="grid-x grid-padding-x align-center">
										
					<div class="inner cell">
						<h2><?php the_sub_field('heading');?></h2>
						<p><span class="large-green-text"><?php the_sub_field('copy');?></span></p>
					</div>
					
					<div class="squares-wrap cell">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-boxes.svg" alt="arrow boxes"/>
					</div>					
					
				</div>
			</div>
			    
		</div>
		<?php endif; ?>
		

		
	</div>
	
	<div class="grid-container">
		<div class="partners-wrap grid-x grid-padding-x">
			
			<div class="cell small-12 medium-shrink">
				<?php 
				$image = get_sub_field('partner_logo');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
						
			<div class="cell auto">
			
				<div class="grid-x grid-padding-x">
					
					<div class="cell small-12 medium-12 tablet-6">
						<div class="inner">
							<div class="pipe"></div>
							<?php the_sub_field('column_1');?>
						</div>
					</div>
		
					<div class="cell small-12 medium-12 tablet-6">
						<div class="inner">
							<div class="pipe"></div>
							<?php the_sub_field('column_2');?>
						</div>
					</div>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
</section>