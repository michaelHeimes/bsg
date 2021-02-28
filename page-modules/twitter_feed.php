<section class="twitter-feed module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="left cell small-12 medium-6 tablet-5">
				<div class="handle h2"><span class="back-slash"><?php the_field('tf_handle', 'option');?></span></div>
				<h2 class="h1"><?php the_field('tf_heading', 'option');?></h2>
				<p><?php the_field('tf_copy', 'option');?></p>
				<?php 
				$link = get_field('tf_link', 'option');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="lm-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>				
			</div>

			<div class="right cell small-12 medium-6 tablet-6 tablet-offset-1">
				Twitter Feed Here
			</div>

		</div>
	</div>
</section>