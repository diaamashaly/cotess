<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="images/logo/fav.png" />
    <!-- Primary Meta Tags -->
    <title>
      Costess Tech - Leading Software Development Company | Web Development,
      Mobile Apps, Cloud Solutions
    </title>
    <meta
      name="title"
      content="Costess Tech - Leading Software Development Company | Web Development, Mobile Apps, Cloud Solutions"
    />
    <meta
      name="description"
      content="Transform your business with Costess Tech's expert software development services. We specialize in web development, mobile app development, cloud solutions, cybersecurity, and digital marketing. Based in Riyadh, Saudi Arabia."
    />
    <meta
      name="keywords"
      content="software development, web development, mobile app development, cloud solutions, cybersecurity, digital marketing, Riyadh, Saudi Arabia, costess tech, software company"
    />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="English" />
    <meta name="author" content="Costess Tech" />
    <meta
      name="copyright"
      content="© 2025 Costess Tech. All rights reserved."
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://costesstech.com/" />
    <meta
      property="og:title"
      content="Costess Tech - Leading Software Development Company"
    />
    <meta
      property="og:description"
      content="Transform your business with expert software development services. Web development, mobile apps, cloud solutions, and digital marketing."
    />
    <meta
      property="og:image"
      content="../costesstech.com/images/logo/03.html"
    />
    <meta property="og:site_name" content="Costess Tech" />
    <meta property="og:locale" content="en_US" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://costesstech.com/" />
    <meta
      property="twitter:title"
      content="Costess Tech - Leading Software Development Company"
    />
    <meta
      property="twitter:description"
      content="Transform your business with expert software development services. Web development, mobile apps, cloud solutions, and digital marketing."
    />
    <meta
      property="twitter:image"
      content="../costesstech.com/images/logo/03.html"
    />

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#10b981" />
    <meta name="msapplication-TileColor" content="#10b981" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta
      name="apple-mobile-web-app-status-bar-style"
      content="black-translucent"
    />
    <meta name="apple-mobile-web-app-title" content="Costess Tech" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://costesstech.com/" />

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/logo/fav.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/logo/fav.png"
    />
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo/03.png" />

	<?php wp_head(); ?>



</head>
<?php if (get_locale() == 'en_US') {
    $class= 'ltr';
} else if(get_locale() == 'ar') {
    $class = 'rtl';
} ?>
<body class='<?php echo $class ?>'>

    <!--******************************** Code Start From Here  ******************************** -->
    <!-- Mobile Menu Overlay -->
    <div class="menu-overlay"></div>
    <!-- Modern Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">
                            <?php if ( is_kr_options( 'logo' ) ): ?>
                            <img width="200" src="<?php the_kr_options( 'logo', 'url' ) ?>"
                            alt="<?php the_kr_options( 'alternative_logo' ); ?>"/>
                            <?php else: ?>
                            <img width="200" src="<?php kr_path_img( 'logo.png' ) ?>" alt="<?php bloginfo( 'name' ) ?>">
                            <?php endif; ?>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- Mobile Menu Logo -->
          <div class="mobile-menu-logo">
            <img
              src="images/logo/03.png"
              alt="Costess Tech Logo"
              class="mobile-logo"
            />
          </div>
          <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary_menu',
                    'menu_class'     => 'navbar-nav ms-auto',
                    'items_wrap' => my_nav_custom(),
                    'container' => false,
                )
            );
            ?>
          <!-- <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul> -->
          <!-- Language Switcher -->
          <div class="language-switcher">
            <div class="language-toggle" data-lang="en">
              <span class="lang-flag">🇺🇸</span>
              <span class="lang-text">EN</span>
            </div>
            <div class="language-toggle" data-lang="ar">
              <span class="lang-flag">🇸🇦</span>
              <span class="lang-text">AR</span>
            </div>
          </div>
        </div>
      </div>
    </nav>
