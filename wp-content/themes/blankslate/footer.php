<div class="clear"></div>
</div>
</div>
<footer id="footer" role="contentinfo">
<div class="wrapper">
<div class="f-widgets">
<aside id="fsidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<?php dynamic_sidebar( 'footer-1' ); ?>
</div>
<?php endif; ?>
</aside>
<aside id="fsidebar" role="complementary" class="big">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<?php dynamic_sidebar( 'footer-2' ); ?>
</div>
<?php endif; ?>
</aside>
<aside id="fsidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<?php dynamic_sidebar( 'footer-3' ); ?>
</div>
<?php endif; ?>
</aside>
</div>
<div class="f-widgets mobile">
<aside id="fsidebar" role="complementary" class="big">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<?php dynamic_sidebar( 'footer-2' ); ?>
</div>
<?php endif; ?>
</aside><aside id="fsidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<?php dynamic_sidebar( 'footer-1' ); ?>
</div>
<?php endif; ?>
</aside>
<aside id="fsidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<?php dynamic_sidebar( 'footer-3' ); ?>
</div>
<?php endif; ?>
</aside>
</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>