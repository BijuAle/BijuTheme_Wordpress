<?php
get_header();
if (have_posts()):
	while (have_posts()):the_post();  
		get_template_part('content_page', get_post_format());
	endwhile;
	echo paginate_links();
else:
	echo "<p>No content found</p>";
endif;
get_footer()
?>