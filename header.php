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

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name');?></title>
	<?php wp_head(); ?>
	<script type="text/javascript">
		window.onload = () => {
			let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
			el.parentNode.removeChild(el);
		}
	</script>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<!-- site-header -->
		<header class="site-header">

			<h1 id='blogName'><a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></h1>
			
			<nav class="site-nav">
				<?php
				$args = array('theme_location'=>'primary');
				wp_nav_menu($args);
				?>
			</nav>
			<span id="blogDesc"><?php bloginfo('description') ?></span>
		</header>