<section class="contact module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 medium-4">
				
				<div class="location-wrap">
					<h2>Location</h2>
					
					<a href="<?php the_field('google_maps_link', 'option');?>" target="_blank"><?php the_field('location', 'option');?></a>
					
				</div>
				
				<div class="contact-wrap">
					<h2>Contact BSG</h2>
					<div><a href="tel:<?php the_field('phone_number', 'option');?>"><?php the_field('phone_number', 'option');?></a></div>
					<div><a href="mailto:<?php the_field('email', 'option');?>"><?php the_field('email', 'option');?></a></div>
				</div>
				
			</div>
			
			
			<div class="right cell small-12 medium-8 tablet-7 tablet-offset-1">
				<div class="copy-wrap">
					<?php the_sub_field('copy');?>
				</div>
				
				<h2>Get In Touch</h2>
				
				Form shortcode goes here
				
			</div>
			
			
		</div>
	</div>
</section>