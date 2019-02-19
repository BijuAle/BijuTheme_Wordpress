<!-- Copyright (c) 2019 BIJU ALE

Author: BIJU ALE (github.com/BijuAle)
License: MIT License

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. -->

<footer class="site-footer">
	<!-- footer-widgets -->
	<div class="footer-widgets clearfix">
		<?php if (is_active_sidebar('footer1')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer1'); ?>
			</div>
		<?php endif; ?>
		<?php if (is_active_sidebar('footer2')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer2'); ?>
			</div>
		<?php endif; ?>
		<?php if (is_active_sidebar('footer3')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer3'); ?>
			</div>
		<?php endif; ?>
		<?php if (is_active_sidebar('footer4')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer4'); ?>
			</div>
		<?php endif; ?>
	</div><!-- /footer-widgets -->
	<!-- 	<nav class="site-nav">
			<?php
			$args = array(
				'theme_location' => 'footer'
			);
			?>
			<?php wp_nav_menu(  $args ); ?>
		</nav> -->
		<span><?php bloginfo('name'); ?> - &copy; 2017 - <?php echo date('Y');?> | Powered by Wordpress & Biju's Theme</span>
	</footer>
</div><!-- container -->
<?php wp_footer(); ?>
</body>
</html>