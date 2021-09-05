<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="author" content="Mariana Thompson, Leonardo Borsten and Mel Holland" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

 <meta property="og:title" content="ASG Aerospace - FAA 145 Repair Station">
 <meta property="og:type" content="website">
 <meta property="og:url" content="http://asgaerospace.com">
 <meta property="og:image" content="">

	<?php wp_head(); ?>

  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</head>

<body <?php body_class(); ?>>

<header class="metalbg">
  <div class="container">
    <div class="row logo">
      <div class="col">
        <p class="text-center faa">FAA CRS # 9A1R325B</p>
								<a href="/">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
								</a>
      </div>
    </div>
    <div class="row nav">
								<?php
									wp_nav_menu( array(

										'menu'				=>	'Main Menu',
										'theme_location'	=>	'primary',
										'container'			=>	'nav',
										'container_class'	=>	'',
										'container_id'		=>	'',
										'menu_class'		=>	'',

									));
								?>
    </div>
  </div>
  <div id="menubutton"><span class="iconify" data-icon="cil:hamburger-menu"></span></div>
<?php edit_post_link('Edit', '<p class="edit-button">', '</p>'); ?>
</header>

