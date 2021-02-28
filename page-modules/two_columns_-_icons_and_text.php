<section class="two-columns-icons-text module">
	<div class="grid-container">
					
		<?php if( have_rows('cards') ):?>
		<div class="grid-x grid-padding-x">

			<?php while ( have_rows('cards') ) : the_row();?>	
		
			<?php if( have_rows('single_card') ):?>
				<?php while ( have_rows('single_card') ) : the_row();?>	
				
				<div class="cell small-12 medium-6">
					<div class="grid-x grid-padding-x">
						
						<div class="left cell shrink">
							<?php 
							$image = get_sub_field('icon');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>				
						</div>
						
						<div class="right cell auto">
							<h3 class="small-caps"><?php the_sub_field('heading');?></h3>
							<p><?php the_sub_field('text');?></p>
						</div>
					
					</div>
				</div>
			
				<?php endwhile;?>
			<?php endif;?>
		
			<?php endwhile;?>
		</div>
		<?php endif;?>
			

		
	</div>
</section>