<section class="recent-press module green-bg">
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x align-middle">
			<div class="emb-wrap cell shrink">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/press-embelleshment.svg" alt="press embelleshment"/>
			</div>
			<div class="cell auto">
				<h2>Recent Press</h2>
			</div>
		</div>
		
			
			<?php $num_posts = get_sub_field('number_of_post_to_show');?>
			
			<?php
				
				if ( $num_posts == 'all' ) {?>
					
					<div class="press-slider">
					
						<?php
					    $args = array(  
					        'post_type' => 'press_post',
					        'post_status' => 'publish',
					        'posts_per_page' => -1, 
					    );
					
					    $loop = new WP_Query( $args ); 
					        
						$counter = 0; while ( $loop->have_posts() ) : $loop->the_post();
	                       if ($counter % 4 == 0 && $counter != 0): ?>
	                      </div>
	                      </div>
	                    <?php endif; ?>
	                    <?php if ($counter % 4 == 0 or $counter == 0): ?>
	                    <div>
	                      <div class="press-wrap grid-x grid-padding-x small-up-1 medium-up-2">
	                    <?php endif; ?>
	                    
	                      <?php get_template_part('parts/loop', 'press'); ?>
	
	                    <?php $counter++; endwhile; ?>        
	                    </div>
	                    </div>
					
					    <?php wp_reset_postdata();?>
					    
					</div>
						
				<?php
						
				} else {?>
				
					<div class="press-wrap grid-x grid-padding-x small-up-1 medium-up-2">

					<?php
						
				    $args = array(  
				        'post_type' => 'press_post',
				        'post_status' => 'publish',
				        'posts_per_page' => $num_posts, 
				    );
				
				    $loop = new WP_Query( $args ); 
				        
				    while ( $loop->have_posts() ) : $loop->the_post();
						get_template_part('parts/loop', 'press');
				    endwhile;
				
				    wp_reset_postdata();?>
				    
					</div>
			    
			    <?php }
			    
			;?>
					
		</div>
		
	</div>
</section>