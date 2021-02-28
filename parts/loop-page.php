<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<?php $banner_style = get_field('banner_style');?>	
						
	<?php if ($banner_style == 'home-page' ):?>			
	
		<?php if( have_rows('home_banner') ):?>
			<?php while ( have_rows('home_banner') ) : the_row();?>
	
			<header class="article-header style-<?php echo $banner_style;?>">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">	
							
						<div class="left cell small-12 medium-6">
									
							<div class="copy-wrap"><?php the_sub_field('copy');?></div>
												
							<?php 
							$link = get_sub_field('link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <a class="lm-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
							
						</div>
						
						<div class="right cell small-12 medium-6">
							<div class="inner">
							
								<?php 
								$image = get_sub_field('image');
								if( !empty( $image ) ): ?>
								<span class="bannner-img-wrap">
								    <img class="banner-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</span>
								<?php endif; ?>	
								
								<img class="banner-emb-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-embellishment.svg" alt="banner embellishment"/>
							
							</div>
						</div>
									
					</div>
				</div>
			</header> <!-- end article header -->	
			
			<?php endwhile;?>
		<?php endif;?>			
	
	
	<?php elseif( $banner_style == 'image-overlap' ):?>
		<?php if( have_rows('image_overlap_banner') ):?>
			<?php while ( have_rows('image_overlap_banner') ) : the_row();?>
	
			<header class="article-header style-<?php echo $banner_style;?>">
				<div class="top">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<?php if( $alt_heading = get_sub_field('alternative_heading') ):?>
								<div class="cell">
									<h1 class="page-title"><?php echo $alt_heading; ?></h1>
								</div>
							<?php else:?>
								<div class="cell">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</div>
							<?php endif;?>
							
						</div>
					</div>
				</div>
				
				<div class="bottom">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">	
					
							<div class="left cell small-12 medium-6">
							
								<?php the_sub_field('copy');?>
								
							</div>
							
							<div class="right cell small-12 medium-6">
								<div class="inner">
								
									<?php 
									$image = get_sub_field('image');
									if( !empty( $image ) ): ?>
									    <img class="banner-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>		
									
									<img class="banner-emb-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-embellishment.svg" alt="banner embellishment"/>	
									
									<?php if( get_sub_field('add_logo') ):?>
										<?php 
										$image = get_sub_field('logo');
										if( !empty( $image ) ): ?>
										<div class="logo-wrap">
										    <img class="banner-logo-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>									
									<?php endif;?>				
								
								</div>
							</div>
				
						</div>
					</div>
				</div>
								
			</header> <!-- end article header -->
			
		<?php endwhile;?>
	<?php endif;?>
	
	
	<?php elseif( $banner_style == 'just-title' ):?>
	
	<header class="article-header style-<?php echo $banner_style;?>">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">	
				<div class="cell">
					<div class="top">

						<?php if( $alt_heading = get_sub_field('alternative_heading') ):?>
				
							<h1 class="page-title"><?php echo $alt_heading; ?></h1>
				
						<?php else:?>
						
							<h1 class="page-title"><?php the_title(); ?></h1>
							
						<?php endif;?>
						
					</div>
				</div>
			</div>
		</div>
	</header> <!-- end article header -->

	<?php endif;?>
				

	
	<section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	    
	</section> <!-- end article section -->
						    					
</article> <!-- end article -->