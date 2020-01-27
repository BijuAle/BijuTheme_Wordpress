<?php
get_header(); ?>
<!-- site-content -->
<div class="site-content">
	<!-- main-column -->
	<div class="main-column">
		<?php
		if( have_posts() ):
			while( have_posts() ): the_post();
					get_template_part('content', get_post_format());
				if ( comments_open() ):
					comments_template();
				endif;
				
			endwhile;
		endif;
		?>
	</div><!-- /main-column -->
</div><!-- /site-content -->
<?php get_footer();
?>