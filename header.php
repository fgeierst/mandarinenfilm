<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" type="image/svg+xml" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.svg">
  <?php wp_head(); ?>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/JuniusVF.woff2" as="font" type="font/woff2" crossorigin>
  <style>
    @font-face {
      font-family: 'Junius';
      src: url(<?php echo get_template_directory_uri(); ?>/fonts/JuniusVF.woff2) format("woff2");
      font-weight: 300 700;
      font-display: swap;
    }
  </style>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header class="" id="header">

      <div class="site-title">
        <?php // if (is_front_page() || is_home() || is_front_page() && is_home()) {
        // echo '<h1>';
        // } 
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mandarinenfilm_logo_image.svg" width="138" height="70" alt="<?php echo esc_html(get_bloginfo('name')); ?>">
        </a>
        <?php // if (is_front_page() || is_home() || is_front_page() && is_home()) {
        // echo '</h1>';
        // } 
        ?>
      </div>

      <nav id="menu" class="nav">
        <?php wp_nav_menu(array('theme_location' => 'top-nav')); ?>
      </nav>

    </header>
    <div id="container">