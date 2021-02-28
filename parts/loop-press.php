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
		
		<h2><a class="underlined" href="<?php the_field('article_pdf');?>" target="_blank"><?php the_field('article_title');?></a></h2>
    
	</div>			            
</article>

