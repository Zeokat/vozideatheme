<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_search()) { ?> <meta name="robots" content="noindex, nofollow" /> <?php } ?>
<title><?php wp_title(''); ?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
	<div id="main-wrap">
		<div id="page-wrap">
			<div id="menu-wrap">
				<div id="menu-center">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'topMenu', 'container_class' => 'smoothmenu' )); ?>
				</div>
			</div>
			
			<div id="header">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('description'); ?>" /></a>
				</div>
				<div class="searchbox">
					<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
						<fieldset>
							<input type="text" class="search-input" id="s" name="s" value="Buscar..." onfocus="if (this.value == 'Buscar...') this.value = '';" onblur="if (this.value == '') this.value = 'Buscar...';" />
							<input type="image" value="Search" class="search-lupa" id="searchsubmit" src="<?php bloginfo('template_directory'); ?>/images/lupa.png" />
						</fieldset>
					</form>
				</div>
			</div>
			<div class="film-line"></div>

