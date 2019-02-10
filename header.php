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