<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cooper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
  <link rel="manifest" href="/site.webmanifest">
  <meta name="theme-color" content="#214154">
  <script>
var _paq=window._paq=window._paq||[];_paq.push(["trackPageView"]),_paq.push(["enableLinkTracking"]),function(){var a="https://analytics.marksuth.dev/";_paq.push(["setTrackerUrl",a+"matomo.php"]),_paq.push(["setSiteId","1"]);var e=document,t=e.createElement("script"),p=e.getElementsByTagName("script")[0];t.async=!0,t.src=a+"matomo.js",p.parentNode.insertBefore(t,p)}();
  </script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav class="navbar sticky-top navbar-expand-md navbar-blur navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="https://marksuth.dev">MARK SUTHERLAND</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => '',
          'fallback_cb' => '__return_false',
          'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
          'depth' => 2,
          'walker' => new bs_nav_menu_walker()
        ));
        ?>
      </div>
    </div>
  </nav>