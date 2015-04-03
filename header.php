<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrap" class="wrap">

	<header id="header" class="header">

		<div id="header-inner" class="header-inner">

			<div class="row">

				<div class="columns small-12">

					<h1 class="title"><?php bloginfo( 'name' ); ?></h1>
					<h4 class="tag-line"><?php bloginfo( 'description' ); ?></h4>

				</div>

				<div class="columns small-12">

					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</nav>

				</div>

			</div>

		</div>

	</header>
