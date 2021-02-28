<section class="newsletter-signup module">
	<div class="bg" style="background-image:url(<?php the_field('nl_background_image', 'option');?>)"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h2 class="h1"><?php the_field('nl_heading', 'option');?></h2>
				<div class="form-wrap">
					<?php the_field('nl_code_snippet', 'option');?>
				</div>
			</div>
		</div>
	</div>
</section>