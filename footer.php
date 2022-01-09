<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cooper
 */

?>
<footer class="site-footer py-4 mt-4 text-center bg-dark">
  <div class="container">
    <p><a href="https://xn--sr8hvo.ws/%F0%9F%93%BB%F0%9F%93%85%F0%9F%9A%BF/previous">←</a>
      An IndieWeb Webring 🕸💍
      <a href="https://xn--sr8hvo.ws/%F0%9F%93%BB%F0%9F%93%85%F0%9F%9A%BF/next">→</a>
    </p>
    <p class="small text-muted">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. This site is carbon offset via <a href="https://treepoints.green/?ref=tTANfORx1u9H" rel="noopener"><i class="fa fa-tree"></i> TreePoints</a> and hosted on <a href="https://m.do.co/c/0af74d4b6f61"><i class="fab fa-digital-ocean"></i> Digital Ocean</a>.
      <br>Unless otherwise stated, this site is licensed under a <a href="https://creativecommons.org/licenses/by/3.0/" rel="noopener">Creative Commons Attribution 3.0 Unported License</a>.
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="nav justify-content-center small %2$s">%3$s</ul>',
        'depth' => 0,
        'walker' => new bs_nav_menu_walker()
      ));
      ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>