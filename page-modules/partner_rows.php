<section class="contact module">
	<div class="grid-container">
			
		<?php if( have_rows('partner_rows') ):?>
			<?php while ( have_rows('partner_rows') ) : the_row();?>
			
			<div class="grid-x grid-padding-x">
	
				<?php if( have_rows('single_row') ):?>
					<?php while ( have_rows('single_row') ) : the_row();?>	
					
					<div class="cell small-12 medium-5">
						
						<?php 
						$image = get_sub_field('logo');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>						
						
					</div>
	
					<div class="cell small-12 medium-7">
						<div class="pipe"></div>
						<?php the_sub_field('copy');?>
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
		
			</div>
		
			<?php endwhile;?>
		<?php endif;?>
		
	</div>
</section>