<section class="heading-left-copy-right module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 tablet-5 xlarge-4 style-<?php the_sub_field('heading_style');?>">
				<div class="inner">
										
					<h2>
						<span><?php the_sub_field('heading');?>
						<?php if ( get_sub_field('heading_style') == 'large' ):?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-embellishment.svg" alt="heading embellishment"/>
						<?php endif;?>
						</span>
					</h2>
					
				</div>
			</div>
		
			<div class="right cell small-12 tablet-7 xlarge-offset-1">
				<?php the_sub_field('copy');?>
			</div>		
		
		</div>
	</div>
</section>