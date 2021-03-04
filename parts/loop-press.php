<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell');?> role="article">
	<div class="inner">
		
		<div class="meta">

			<a class="underlined" href="<?php the_field('article_link');?>" target="_blank"><span><?php the_field('press_publication_name');?></span></a>
			
			<span> / </span>
			
			<span class="date">
				<?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
			</span>
		
		</div>
		
		<?php if( $article_link =  get_field('article_link') ):?>

			<h2><a class="underlined" href="<?php echo $article_link;?>" target="_blank"><?php the_field('article_title');?></a></h2>
		
		<?php endif;?>
		
		<?php if( $article_pdf =  get_field('article_pdf') ):?>

			<h2><a class="underlined" href="<?php echo $article_pdf;?>" target="_blank"><?php the_field('article_title');?></a></h2>
		
		<?php endif;?>
    
	</div>			            
</article>

