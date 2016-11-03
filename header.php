<html>
<head>
	<title>AwesomeFlatTheme</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<div class="row">
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<div class="col s12">
					<a class="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo(); ?></a>

					<?php wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'menu_class' => 'right hide-on-med-and-down',
							'container' => '',
						)
					); ?>

					<?php wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'menu_class' => 'side-nav',
							'menu_id' => 'mobile-demo',
							'container' => '',
						)
					); ?>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				</div>
			</div>
		</nav>
	</div>
</div>



<div class="container">

