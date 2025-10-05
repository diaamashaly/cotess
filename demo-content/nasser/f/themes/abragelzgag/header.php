<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- START FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">
    <!-- END   FONTS -->

	<?php wp_head(); ?>
</head>
<body>
<div id="loading-mask" class="bg-color">
    <div class="loader">

        <div class="loader">
			<?php if ( is_kr_options( 'logo' ) ): ?>
                <img src="<?php the_kr_options( 'logo', 'url' ) ?>"
                     alt="<?php the_kr_options( 'alternative_logo' ); ?>"/>
			<?php else: ?>
                <img src="<?php echo KR_THEME_IMAGES_URI; ?>logo.png" alt="<?php bloginfo( 'name' ) ?>">
			<?php endif; ?>
        </div>

    </div>
    <div class="waves">
        <div class="wave-1"></div>
        <div class="wave-2"></div>
        <div class="wave-3"></div>
        <div class="wave-4"></div>
    </div>
</div>
<header id="header">
    <div class="nav-bar">
        <div class="container">

            <div class="logo float-right">
				<?php if ( is_kr_options( 'logo' ) ): ?>
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ) ?>">
                        <img src="<?php the_kr_options( 'logo', 'url' ) ?>"
                             alt="<?php the_kr_options( 'alternative_logo' ); ?>"/>
                    </a>
				<?php else: ?>
                    <a href="<?php echo home_url() ?>" title="<?php bloginfo( 'name' ) ?>">
                        <img src="<?php kr_path_img( 'logo.png' ) ?>" alt="<?php bloginfo( 'name' ) ?>">
                    </a>
				<?php endif; ?>
            </div>
            <div class="button-menu">
                <a href="javascript:void(0)">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="primary-menu float-left clearfix">


				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary_menu',
						'menu_class'     => 'list-unstyled',
						'items_wrap' => my_nav_custom(),
						'container' => false,
					)
				);
				?>


            </div>

        </div>
    </div>
</header>