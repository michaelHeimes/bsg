<section class="contact module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 tablet-4 show-for-tablet">
				
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
			
			
			<div class="right cell small-12 tablet-7 tablet-offset-1">
				<div class="copy-wrap">
					<span class="large-green-text"><?php the_sub_field('copy');?></span>
				</div>
				
				<div class="left grid-x grid-padding-x hide-for-tablet">
				
					<div class="location-wrap cell small-12 medium-shrink">
						<h2>Location</h2>
						
						<a href="<?php the_field('google_maps_link', 'option');?>" target="_blank"><?php the_field('location', 'option');?></a>
						
					</div>
					
					<div class="contact-wrap cell small-12 medium-shrink">
						<h2>Contact BSG</h2>
						<div><a href="tel:<?php the_field('phone_number', 'option');?>"><?php the_field('phone_number', 'option');?></a></div>
						<div><a href="mailto:<?php the_field('email', 'option');?>"><?php the_field('email', 'option');?></a></div>
					</div>
					
				</div>
				
				<h2>Get In Touch</h2>
				
				<?php gravity_form( 1, false, false, false, '', true );?>
				
			</div>
			
			
		</div>
	</div>
</section>