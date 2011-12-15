<?php get_header(); ?>

<div id="content">

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

	<div class="entry">
		
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<?php the_content('Read the rest of this entry &raquo;'); ?>
		
		</div>
		
		<div class="clear"></div> 

		
		<hr />
		
		<div class="meta">
		
			<!--<p>Posted in <?php the_category(', '); ?></p>-->
			<p>Tagged with <?php the_tags(', '); ?> </p>		
			<p>Posted by <?php the_author_link(); ?> <?php the_time('F jS, Y'); ?> &mdash; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> <?php edit_post_link('Fix me...', '', ''); ?></p>
			
			<div class="clear"></div> 
			
		</div>
		
		
		<hr />
		
		<div class="clear"></div> 
		
		<?php comments_template(); ?>
		
		<?php endwhile; ?>
	
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&#8961; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &#8961;') ?></div>
		</div>
		
		<div class="clear"></div> 
			
			
		<?php else : ?>

			<div class="entry">
			
				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>
				
			</div>

		<?php endif; ?>
		
		<div class="clear"></div> 

		
		

</div><!--content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>