<?php if ( have_rows('page_modules') ) : ?>
<?php while ( have_rows('page_modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'contact' ) : 
	
		get_template_part('page-modules/contact');
	
	endif;?>

	<?php if ( get_row_layout() == 'heading_left_copy_right' ) : 
	
		get_template_part('page-modules/heading_left_copy_right');
	
	endif;?>

	<?php if ( get_row_layout() == 'newsletter_signup' ) : 
	
		get_template_part('page-modules/newsletter_signup');
	
	endif;?>

	<?php if ( get_row_layout() == 'partners_module' ) : 
	
		get_template_part('page-modules/partners_module');
	
	endif;?>

	<?php if ( get_row_layout() == 'partner_rows' ) : 
	
		get_template_part('page-modules/partner_rows');
	
	endif;?>

	<?php if ( get_row_layout() == 'press_kit' ) : 
	
		get_template_part('page-modules/press_kit');
	
	endif;?>

	<?php if ( get_row_layout() == 'quote' ) : 
	
		get_template_part('page-modules/quote');
	
	endif;?>

	<?php if ( get_row_layout() == 'recent_press' ) : 
	
		get_template_part('page-modules/recent_press');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'twitter_feed' ) : 
	
		get_template_part('page-modules/twitter_feed');
	
	endif;?>


	<?php if ( get_row_layout() == 'two_columns_-_icons_and_text' ) : 
	
		get_template_part('page-modules/two_columns_-_icons_and_text');
	
	endif;?>


	<?php if ( get_row_layout() == 'video' ) : 
	
		get_template_part('page-modules/video');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>